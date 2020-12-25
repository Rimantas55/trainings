"use strict";
// Search in table

// in this task we have to implement seatch inside table.
// Make request on the following link and print received data inside table

// https://jsonplaceholder.typicode.com/users

// Display the following fields only: name, username, email, phone.

// Show the following fields above the table msContentScript, but bellow the table header,
// just like it is displayed in the image.
// User bootstrap classes on tables and form inputs.Display

// When you type something inside one of the search input field and hit ennter or type something and click outside
// (trigger blur event) it should filder the table data based on that value.

//! does not work, need investigation
fetch("http://jsonplaceholder.typicode.com/users")
    .then((response) => response.json())
    .then((users) => initTable(users));

function initTable(users) {
    const table = document.createElement("table");
    table.className = "table";
    table.innerHTML = `<thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Username</th>
      <th>Email</th>
      <th>Phone</th>
    </tr>
    <tr>
    <th></th>
    <th>
      <input data-field="name" class="form-control">
    </th>
    <th>
      <input data-field="username" class="form-control">
    </th>
    <th>
      <input data-field="email" class="form-control">
    </th>
    <th>
      <input data-field="phone" class="form-control">
    </th>
    </tr>
    </thead>
    `;
    const tbody = document.createElement("tbody");

    renderUsers(users);

    table.append(tbody);

    document.body.append(table);

    const inputs = table.querySelectorAll("input");
    inputs.forEach((input) => {
        input.addEventListener("blur", (evt) => {
            // console.log(evt);
            filterTable(evt.target.dataset.field, evt.target.value);
        });
        input.addEventListener("keyup", (evt) => {
            if (evt.keycode === 13) {
                filterTable(evt.target.dataset.field, evt.target.value);
            }
        });
    });

    function renderUsers(users) {
        const content = users
            .map(
                (user, index) =>
                    `<tr>
        <td>${index + 1}</td>
        <td>${user.name}</td>
        <td>${user.username}</td>
        <td>${user.email}</td>
        <td>${user.phone}</td>
      </tr>
    `
            )
            .join("\n");
        tbody.innerHTML = content;
    }

    function filterTable(field, value) {
        const newUsers = users.filter((user) => {
            return user[field].toLowerCase().includes(value.toLowerCase());
        });
        renderUsers(newUsers);
    }
}
