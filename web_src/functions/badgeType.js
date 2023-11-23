async function showBadge(url, api) {//add cancel button for update
    const fulUrl = url + 'data_src/api/badgeType/read.php?APIKEY=' + api;

    try {
        const response = await fetch(fulUrl);
        const data = await response.json(); // Parse JSON response
        console.log(data); // Log the response from the PHP file

        const table = document.createElement('badge');
        const tableHeader = document.createElement('thead');
        const headerRow = document.createElement('tr');
        const headers = ['Type ID', 'Name', 'Edit', 'Delete']; // Define table headers here

        headers.forEach(headerText => {
            const header = document.createElement('th');
            header.appendChild(document.createTextNode(headerText));
            headerRow.appendChild(header);
        });

        tableHeader.appendChild(headerRow);
        table.appendChild(tableHeader);

        const tableBody = document.createElement('tbody');

        data.forEach(item => {
    const row = document.createElement('tr');
    const id = document.createElement('td');
    const name = document.createElement('td');
    const edit = document.createElement('td');
    const del = document.createElement('td'); // Changed from 'delet' to 'del'

    id.appendChild(document.createTextNode(item.typeID));
    name.appendChild(document.createTextNode(item.name));

    // Edit button
    const editButton = document.createElement('button');
    editButton.textContent = 'Edit';
    editButton.addEventListener('click', () => {
    
        if (editButton.textContent === 'Edit') {
            const nameField = document.createElement('input');
            nameField.type = 'text';
            nameField.value = item.name; // Assuming 'name' is the property to edit
            name.innerHTML = ''; // Clear the cell content
            name.appendChild(nameField);

            // Update the edit button to a 'Save' button
            editButton.textContent = 'Update';

            nameField.addEventListener('change', () => {
                
            });

        }
        else if(editButton.textContent === 'Update'){
    
            // Save functionality here: Get the updated value from the inputField.value
            //const updatedValue = typeIDField.value;
            const nameInput = name.querySelector('input');
            const nameUpdate = nameInput.value;

            alert('Update Button clicked');  

            const updateUrl = url + 'data_src/api/badgeType/update.php';
            console.log(updateUrl);

            //alert(item.ruleID + ": " + updatedValue);
            //alert(item.ruleID);
            editButton.textContent = 'Edit';

            name.innerHTML = nameUpdate;

            const typeData = {
                typeID: item.typeID,
                name: nameInput.value,
            };
            updateParkingBadge(updateUrl, api, typeData);

        }
    });

    edit.appendChild(editButton);

    // Delete button
    const deleteButton = document.createElement('button');
    deleteButton.textContent = 'Delete';
    deleteButton.addEventListener('click', () => {

        alert('Delete Button clicked')
        //Call delete api for delete this item
        deletUrl = url + 'data_src/api/badgeType/delete.php';

        deleteParkingBadge(deletUrl, api, item.typeID)

    });
    del.appendChild(deleteButton);

    row.appendChild(id);
    row.appendChild(name);
    row.appendChild(edit);
    row.appendChild(del);

    tableBody.appendChild(row);
});


        table.appendChild(tableBody);

        const element = document.getElementById('badgeTable');
        element.innerHTML = ''; // Clear previous content
        element.appendChild(table);
    } catch (error) {
        console.error('Error:', error);
    }
}

async function updateParkingBadge(url, api, data) {

    try {
        const response = await fetch(url, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'Access-Control-Allow-Origin': '*',
                // Add other necessary headers here
            },
            body: JSON.stringify({
                typeID: data.typeID,
                name: data.name,
                APIKEY: api,
                // Add other properties as needed for your PHP script
            }),
        });

        const responseData = await response.json();
        console.log(responseData); // Log the response from the server
        alert('Badge Updated!');
    } catch (error) {
        console.log('Error:');
    }
}

async function deleteParkingBadge(url, api, typeID) {

    try {
        const response = await fetch(url, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                
                // Add other necessary headers here
            },
            body: JSON.stringify({
                typeID: typeID,
                APIKEY: api,
                // Add other properties as needed for your PHP script
            }),
        });

        const responseData = await response.json();
        console.log(responseData); // Log the response from the server
        

        if('Type ID is used in parkingRule table.' === responseData.message){
            alert('Type ID is used in parkingRule table.\nCannot delete!');
        }
        else{
            alert('Badge Deleted!');
        }
    } catch (error) {
        console.log('Error:');
    }
}