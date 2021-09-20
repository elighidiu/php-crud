# Title: Create, Read, Update, Delete
Created a CRUD system to store student, teacher and class information in the database.

- Repository: `php-crud`
- Type of Challenge: `Learning Challenge`
- Duration: `3 days`
- Deployment strategy : `NA`
- Solo challenge

## General overview
### Day 1. 
- [x]	Create the E-R  diagram
- [x]	Connect to the DB
- [x]	Create the classes for student, class & teacher
- [x]	Place the selection on index
### Day 2. 
- [x]	Figure it out how to organize the files: where will the create & edit will be placed?
- [x]	Create the necessary controllers & understand how to use them
- [x]	Create all the methods needed for the students, class and teacher 
- [x]	Create the general overview pages for all 3 entities

## Learning objectives
- To be able to connect to a database
- To be able to write a simple Create, Read, Update & Delete (CRUD) application
- Use a provided MVC structure to work into.

## Must-have features
You have to provide the following pages for Students, Teacher & Class.

- A general overview of all records of that entity in a table
    * Each row should have a button to edit or delete the entity
    * This page should have a "create new" button
- A detailed overview of the selected entity
    * This should include a button to delete this entity
    * Edge case: A teacher cannot be removed if he is still assigned to a class
    * Edge case: If you remove a class, make sure to remove the link between the students and the class.
- A page to edit an existing entity
- A page to create a new entity

#### Student
- Name
- Email
- Class (with clickable link)
- Assigned teacher (clickable link - relation via class)

#### Teacher
- Name
- Email
- List of all students currently assigned to him (clickable link)
 
#### Class 
- Name class (Giertz, Lamarr, ...)
- Location (Antwerp, Gent, Genk, Brussels, Liege)
- Assigned teacher (clickable link)
- List of assigned students (clickable link)

