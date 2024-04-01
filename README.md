# php-clean-code

### General principles

- First Write Your Code Than Refactor It
- Y.A.G.N.I (You Ain't Gonna Need It)
- KISS (Keep It Simple, Stupid)
- DRY (Don't Repeat Yourself)
- Broken Window Theory
- Always Leave Code Cleaner Than YOu Found It

### The words of elders

```
“Any fool can write code that a computer can understand.
Good programmers write code that humans can understand.”
Martin Fowler
```

### Code Smells

- Rigidity
    - The design is hard to change
    - Sign: Huh, it was a lot more complicated than I thought.
- Fragility
    - The design is easy to break
    - Sign: some modules are constantly on the bug list
- Immobility
    - The design is hard to reuse
- Viscosity
    - Changes are easier to implement by doing the wrong thing (Hack)
    - Sign: When a change is needed, you are tempted to hack rather than to preserve
      the original design

## Clean code rules in action

### name

Choose descriptive and unambiguous names.

- Make meaningful distinction.
- Use pronounceable names (modymdhms)
- Use searchable names.
- Replace magic numbers with named constants (P)
- Avoid encodings. Don't append prefixes or type information.
- Don't use a,b,c,i
- Class should be a noun
- method should be a verb
- Boolean names should answer Yes/No
- Pick one word per concept

```text
You Think You Found A Better Name:
Rename It !
```

### methods ( function )

- Small
- Smaller than that
- Do one thing
- Less 80 characters
- Less 7 line
- Don't use switch .. it violates SRP, OCP (Use Abstract Factory)
- Don't use else
- Arguments
- Don't be afraid to make a name long ... it's better than use short enigmatic
- Have no side effect
- Command query separation
- DRY code (Don't Repeat Yourself)
- KISS
- Don't afraid of new line
- Don't afraid of Exception

### classes 

- Should be small
- SRP (Single Responsibility Principle)
- Cohesion
- Loose Coupling (Use Dependency Inversion)
- Less than 300 line
- Use Your Conventions