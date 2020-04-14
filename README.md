# phpgamebox
### Database

- listing table
    - (id, owner, title, description, location, price, console, sold, picture, picture2, picture3, game_condition, game, dateposted)
    - id auto increments and is  the primary key
- user table
    - (username, password, firstname, lastname, email, description, picture)
    - usernamee is the primary key
- shoppingcart table
    - (userid, listingid)
    - Each row should be unique