# Construção e Habitação

Website for a housing and construction company, made in PHP as a course project (2024).

## Pages

- **Home**: banner carousel, latest highlights and developments
- **Highlights** (`destaques.php`) and a page for each one
- **Developments** (`empreendimentos.php`)
- **About us** (`quem_somos.php`)
- **Contacts**, in the footer of every page

## How it's built

- PHP with a MySQL database (PDO): the content of every page comes from the database tables `carousel`, `destaques`, `empreendimentos`, `quem_somos` and `contactos`
- `components/`: header and footer shared by all pages
- `helpers/`: database access and one helper per section
- `views/`: page layouts
- Plain CSS and JavaScript, Poppins font

## Running it

It needs a local PHP and MySQL server (for example XAMPP) and a database named `construcao_e_habitacao_bd` with the tables above. The database itself isn't included.
