function checkName(){

    let name = document.getElementById('name').value;

    if (name.trim() === '') 
    {
        alert('Field cannot be empty.');
        return;
    }

    const myName = name;
    const x = myName[0];

    if (!(x >= 'a' && x <= 'z') && !(x >= 'A' && x <= 'Z')) 
    {
        alert('Name must start with a letter.');
        return;
    }

    for (let i = 0; i < myName.length; i++) 
    {
        if ((name[i] >= 'a' && name[i] <= 'z') || (name[i] >= 'A' && name[i] <= 'Z') ||  name[i] === '.' || name[i] === '-' || name[i] === ' ') 
        {
            continue;
        }

        else
        {
            alert("Can contain only a-z or A-Z or dot(.) or dash(-)");
            return;
        }

    }





    let cnt = 0;




    for (let i = 0; i < name.length; i++) {

    if (name[i] === ' ') {

        cnt++;

    }

    }




    if (cnt < 1) {

        alert("Name should contain atlest two words");

        return;

    } else {

        alert("Accepted!!!");

        return;

    }

}