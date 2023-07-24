function checkdob() 
{
    let dob = document.getElementById('dob').value;
    if (dob.trim() === '') {
        alert('Field cannot be empty.');
        return;
    }

}
