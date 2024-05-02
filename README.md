# PHP Activities CRUD Documentation

This document describes the development of a simple CRUD in PHP to manage activities. The system allows for the creation, reading, updating, and removal of activities in a database chosen by the developer, such as PostgreSQL or MySQL.

## System Requirements

- PHP 7.x or higher
- Database (e.g., PostgreSQL, MySQL)

## Database Structure

The database should contain a single table named `activities` with the following fields:

- `id` (INT, auto-increment)
- `title` (VARCHAR)
- `description` (TEXT)
- `created_at` (TIMESTAMP)

## Features

The CRUD has the following features:

1. **Activity Registration (Screen 1)**:
   - Allows the registration of new activities.
   - The page displays a form for inserting the title and description of the activity.

2. **Activity Listing (Screen 2)**:
   - Displays all registered activities.
   - Each item in the list is a link that directs to the edit/removal screen (Screen 3).

3. **Editing and Removal of Activities (Screen 3)**:
   - Allows the editing and removal of existing activities.
   - Loads the information of the selected activity on the listing screen.
   - Displays a pre-filled form with the activity's data for editing.
   - Offers the option to remove the activity.

## Styling (Optional)

Styling of the screens can be done using CSS to enhance the user experience.

## Example Screens

### Screen 1 - Activity Registration

- Form for registering new activities.
- The "id" field is disabled since it is auto-increment in the database.

### Screen 2 - Activity Listing

- Lists all registered activities.
- Each item in the list is a link to the edit/removal screen.

### Screen 3 - Editing and Removal of Activities

- Allows editing and removal of the selected activity.
- Displays a pre-filled form with the activity's data.


## Final Considerations

This PHP CRUD offers a simple and effective way to manage activities, allowing users to create, view, update, and delete records intuitively. The styling of the screens can be customized according to the project's needs.
