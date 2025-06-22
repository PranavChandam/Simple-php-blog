# Simple PHP Blog

A basic blog built with PHP and MySQL.

## Features
- Add and view blog posts
- Clean UI
- Simple code structure

## Tech Stack
- PHP
- MySQL
- HTML/CSS

## Setup
1. Create a MySQL database named `blog_db`
2. Create `posts` table:

```sql
CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    content TEXT
);
