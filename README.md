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