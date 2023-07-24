function checkEmail() 
{
    let email = document.getElementById('email').value;

    if (email.trim() === '') 
    {
        alert('Field cannot be empty.');
        return;
    }

    let counter = 0;

    for (let i = 0; i < email.length; i++) 
    {
        if (email[i] === '@') {
            counter++;
        } else if (email[i] === '.') {
            counter++;
        }
    }

    if (counter !== 2) 
    {
        alert('Invalid email!');
        return;
    } else {
        alert('Accepted...');
        return;
    }

    alert('Email Rejected');
}
