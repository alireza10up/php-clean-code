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

```
In no way should object states in the program be changed from outside,
they should be available through getter and setter.
```

## SOLID Principles 

in object-oriented computer programming , SOLID is a mnemonic acronym for five design principles intended to make software designs more understandable , flexible , and maintainable .

* Single Responsibility Principle .
  * A class should have on , only one , reason to change.
* Open-Close Principle
  * You should be able to extend a classes behavior, without modifying it.
* Liskov Substitution Principle
  * Derived classes must be substitutable for their base classes.
* Interface Segregation Principle
  * Make fine-grained interfaces that are client specific.
* Dependency Inversion Principle 
  * Depend on abstractions, not on concretions.

### Single Responsibility Principle (SRP)

A Component(Class, Module, method) should have only one reason to change .

* Cohesion
  * Cohesion is the degree to which the various parts of a software component are related.
> Aim for High Cohesion

* Coupling
  * Coupling is defined as the level of inter dependency between various software components.
> Aim For Loose Coupling

### Tip in SRP

In the first step of the clean code of the SRP discussion, we begin to examine the smallest part , can refer to the function , we need ask if it belongs in this place. Does it only do one thing? If a certain section requires changes, is it okay to apply those changes here?

In the next step, we go to a higher layer, that is, a section like classes.
Here we check whether the functions that we separated in the previous step are related to this class or not and should be transferred to a separate entity, if there are functions that are not related to this class. We need to transfer functions to another class and increase the so-called Cohesion

In the last step, we reduce the coupling in such a way that we recognize the dependencies between the classes and minimize the coupling of the classes by techniques such as passing variables instead of taking them directly.

### Open-Closed Principle (OCP)

* A Component ( Class , Module, Method ) Should Be pen For Extension, But Closed For Modification .

### Tip in OCP

In principle OCP, we can simulate the plugin system by dynamiting and isolating a main class, and instead of changing the main class by adding a component to the system, we use it only by naming it.

### Liskov Substitution Principe (LSP)

* Derived Classes Must Be Substitutable For Their Base Classes
* In This Principle, We Design And Couple With Interfaces

### Tip in LSP

The sign of violation of the LSP principle is that we define a series of interfaces and the classes that extend them forcefully implement them or leave them empty.

The way is that we come and separate the interfaces, this can be recognized through class concepts.

In this principle, all items including input and output of derived classes should be key

Basically, liskov focuses on the implementation of subclasses or clients

### Interface Segregation Principle (ISP)

* Make Fine-Grained Interfaces That Are Client Specific

### Tip in ISP

This is how this principle is defined that we should design the interface simple and small from the beginning

Here the focus is on the interface and creating an interface for a particular concept

Basically, liskov focuses on the implementation of subclasses or clients


### Dependency Inversion Principle (DIP)

* Depend On Abstractions, Not On Concretions.

### Tip in DIP

The dip principle says that you should depend on abstractions, not on concrete ones

IOC Container => Inversion Of Control Container

We Never New Class In Program We Should be Use IOC for Control and create Instance in Program 