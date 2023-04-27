# -*- coding: utf-8 -*-
"""Untitled18.ipynb

Automatically generated by Colaboratory.

Original file is located at
    https://colab.research.google.com/drive/17qP2ihZXiAplXMjSnw7NepSgv5panYiE
"""

import collections

# input_string = "a+b+c*d"
input_string = "id id id id"

class Grammar:
    def __init__(self, productions):
        self.productions = productions
        self.non_terminals = set(p[0] for p in productions)  # Set of non-terminal symbols
        self.terminals = set(token for p in productions for token in p[1]) - self.non_terminals  # Set of terminal symbols
        self.terminals.add('$')  # End of input marker

    def get_production(self, index):
        return self.productions[index]

    def closure(self, item_set):
        #return the closure set of those items
        closure_set = set(item_set)
        added = True
        while added:
            added = False
            for item in list(closure_set):
                after_dot = item.production[1][item.dot_pos] if item.dot_pos < len(item.production[1]) else None
                if after_dot in self.non_terminals:
                    # If the symbol after the dot in the item is a non-terminal symbol, add all productions with that non-terminal as the left-hand side to the closure set
                    for prod_index, prod in enumerate(self.productions):
                        if prod[0] == after_dot:
                            new_item = Item(prod_index, 0, item.lookahead)
                            if new_item not in closure_set:
                                closure_set.add(new_item)
                                added = True
        return closure_set

    def goto(self, item_set, symbol):
        #return the set of items that can be obtained by shifting the dot over the given symbol
        new_item_set = set(item.advance() for item in item_set if item.dot_pos < len(item.production[1]) and item.production[1][item.dot_pos] == symbol)
        return self.closure(new_item_set) if new_item_set and symbol in self.non_terminals else new_item_set

grammar = Grammar([
    ('E', 'T+E'),
    ('E', 'T'),
    ('T', 'F*T'),
    ('T', 'F'),
    ('F', 'id'),
])

class Item:
    def __init__(self, production_index, dot_pos, lookahead):
        # Initialize an Item object with the given production index, dot position, and lookahead symbols.
        self.production_index = production_index
        self.dot_pos = dot_pos
        self.lookahead = lookahead

    def advance(self):
        # Return a new Item object with the dot position advanced by one.
        return Item(self.production_index, self.dot_pos + 1, self.lookahead)

    @property
    def production(self):
        # Get the production object corresponding to the current production index.
        return grammar.get_production(self.production_index)

    def __eq__(self, other):
        # Check if two items are equal by comparing their production index, dot position, and lookahead.
        return (
            self.production_index == other.production_index
            and self.dot_pos == other.dot_pos
            and self.lookahead == other.lookahead
        )

    def __hash__(self):
        # Return a hash value based on the production index, dot position, and lookahead of the item.
        return hash((self.production_index, self.dot_pos, self.lookahead))

    def __repr__(self):
        # Return a string representation of the item.
        return f"({self.production_index}, {self.dot_pos}, {self.lookahead})"

def table_builder(grammar):
    # Step 1: Compute the canonical collection of LR(1) items
    canonical_collection = [grammar.closure({Item(0, 0, '$')})]

    # Step 2: Build the LR(1) parsing table
    table = collections.defaultdict(dict)
    for i, item_set in enumerate(canonical_collection):
        for symbol in grammar.terminals | grammar.non_terminals:
            # Compute the goto set for each symbol
            goto_set = grammar.goto(item_set, symbol)
            if goto_set and goto_set not in canonical_collection:
                # If the goto set is not already in the canonical collection, add it
                canonical_collection.append(goto_set)
            if goto_set:
                # Add an "S" (shift) or "G" (goto) action to the parsing table
                action = 'S' if symbol in grammar.terminals else 'G'
                table[i][symbol] = f"{action}{canonical_collection.index(goto_set)}"

        # Add reduce actions to the parsing table for items with a dot at the end
        for item in item_set:
            if item.dot_pos == len(item.production[1]):
                if item.production[0] == 'E' and item.lookahead == '$':
                    # If the item is the start production followed by the end-of-input marker, add an "ACCEPT" action
                    table[i]['$'] = 'ACCEPT'
                else:
                    # Otherwise, add an "R" (reduce) action to the parsing table
                    table[i][item.lookahead] = f"R{item.production_index}"

    # Step 3: Return the parsing table
    return table

def parse(table, grammar, input_string):
    # Initialize stack, add $ to end of input_string, and set cursor to 0
    stack = [0]
    input_string = input_string + ' $'
    cursor = 0

    while True:
        # Get current state and current symbol at the cursor position
        current_state = stack[-1]
        current_symbol = input_string[cursor]

        # Get the action associated with the current state and current symbol
        action = table[current_state].get(current_symbol)

        # If no action is defined for the current state and symbol, the input string is not valid
        if not action:
            return False

        # Print the stack, input, and action for debugging purposes
        print(f"Stack: {stack}, Input: {input_string[cursor:]}, Action: {action}")

        # If the action is 'ACCEPT', the input string is valid
        if action == 'ACCEPT':
            return True

        # Determine the type of action and the argument associated with it
        action_type, arg = action[0], int(action[1:])

        # If the action is a shift, push the current symbol and the next state onto the stack, and advance the cursor
        if action_type == 'S':
            stack.append(current_symbol)
            stack.append(arg)
            cursor += 1
        
        # If the action is a reduce, pop the necessary number of symbols from the stack and replace them with the nonterminal on the left side of the production
        # Then, push the new state onto the stack based on the current state and nonterminal
        elif action_type == 'R':
            production = grammar.get_production(arg)
            stack = stack[:-2 * len(production[1])]
            current_state = stack[-1]
            stack.append(production[0])
            stack.append(table[current_state][production[0]])
        
        # If the action is a goto, push the current symbol and the new state onto the stack, and advance the cursor
        elif action_type == 'G':
            stack.append(current_symbol)
            stack.append(arg)
            cursor += 1

table = table_builder(grammar)
for i in table:
    print(table[i])
print(parse(table, grammar, input_string))

