# Student Grade Calculator — Project Guide

### 📋 Project Overview

**Project Name:** Student Grade Calculator (PHP Beginner Sandbox)

**Target Audience:** Absolute Beginners in PHP &amp; Database Concepts

**Learning Pillars:**

- Understanding flat arrays vs. structured relational logic
- Handling form inputs (`$_POST` / `$_GET`) and sequential loops (`foreach`)
- Transitioning from repetitive data strings to clean primary/foreign key connections

This structural guide contrasts the initial prototype approach (best suited for flat dummy text structures) with a standard relational configuration.

## Phase 1: Unnormalized Schema Dummy Data Reference

This layout mirrors data as it is typed by eye. It is easier to grasp during the very first day of writing hardcoded multi-dimensional PHP arrays, but results in duplicated text values.

### faculties

| Field Name     | Description                                            |
|----------------|--------------------------------------------------------|
| `id`           | Unique Faculty Identifier                              |
| `faculty_name` | Literal name of the stream (e.g., Science, Management) |

### subjects

| Field Name     | Description                                           |
|----------------|-------------------------------------------------------|
| `id`           | Unique Subject Identifier                             |
| `faculty`      | Literal text name repeating the faculty name directly |
| `subject_name` | Name of the academic subject                          |

### students

| Field Name  | Description                                               |
|-------------|-----------------------------------------------------------|
| `id`        | Unique system identifier key                              |
| `faculty`   | Literal text name of the associated stream                |
| `roll_no`   | Official student roll identifier code string              |
| `name`      | Full student text name                                    |
| `photo_url` | Filepath string or resource URL to student portrait photo |

### marks

| Field Name        | Description                                              |
|-------------------|----------------------------------------------------------|
| `id`              | Unique Record Identifier                                 |
| `student_roll_no` | Duplicated tracking student roll code string             |
| `student_name`    | Duplicated textual record of the student name            |
| `faculty`         | Duplicated literal name string of the faculty department |
| `subject`         | Duplicated literal title text of the course subject      |
| `obtained_marks`  | Numeric entry score points value                         |

## Phase 2: Normalized Schema Relational Structure

This layout relies purely on reference keys. Instead of writing text strings over and over, tables map directly to each other using numeric IDs.

### faculties

| Field Name     | Description                              |
|----------------|------------------------------------------|
| `id`           | Primary Key (Auto-Increment / Unique)    |
| `faculty_name` | The clean, standalone faculty text title |

### subjects

| Field Name     | Description                                 |
|----------------|---------------------------------------------|
| `id`           | Primary Key (Auto-Increment)                |
| `faculty_id`   | Foreign Key pointing to `faculties.id`      |
| `subject_name` | Title text of the curriculum subject course |

### students

| Field Name   | Description                                                 |
|--------------|-------------------------------------------------------------|
| `id`         | Primary Key (System Internal Key)                           |
| `faculty_id` | Foreign Key pointing to `faculties.id`                      |
| `roll_no`    | Unique institutional Student Academic Roll Reference Number |
| `name`       | Full student profile name text                              |
| `photo_url`  | Storage pointer or application file route path asset string |

### marks

| Field Name       | Description                                                       |
|------------------|-------------------------------------------------------------------|
| `id`             | Primary Key (Auto-Increment)                                      |
| `student_id`     | Foreign Key connecting to `students.id`                           |
| `subject_id`     | Foreign Key connecting to `subjects.id`                           |
| `obtained_marks` | Numeric grade metric input (integer or decimal calculation scale) |
=======
# Student Grade Calculator

## Project Description
Student Grade Calculator is a simple PHP project developed using HTML, CSS, and PHP. It is designed to calculate and display student grades in a simple and user-friendly way.

## College
Himalaya Darshan College

## Faculties
- BIM
- BCA
- BSc CSIT

## Features
- Home Page
- About Page
- College Information
- Student Information
- Grade Calculator
- Result Page
- Responsive Design

## Technologies Used
- HTML
- CSS
- PHP

## Project Structure

```
Student-Grade-Calculator/
│
├── index.php
├── about.php
├── college.php
├── student.php
├── gradecalculator.php
├── result.php
├── assets/
├──── css/
│   └── style.css
├── includes/
│   ├── header.php
│   ├── navbar.php
│   └── footer.php
└── README.md
```

## Developed By
Sabina Khanal, Priyanka Sah, Anushka Halwai, Sangrila Majhi, Jigyasa Majhi

## Thank You
Thank you for visiting this project.
