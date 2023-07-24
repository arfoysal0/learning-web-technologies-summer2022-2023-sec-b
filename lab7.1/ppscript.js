function checkpp() 
{
    let userId = document.getElementById("userId").value;
    let pictureInput = document.getElementById("picture");

    if (userId < 0) 
    {
      alert("User id can't be negative.");
      return;
    }

    if (!pictureInput.files || pictureInput.files.length === 0) 
    {
      alert("A file must be selected.");
      return;
    }

    alert("Accepted.");
  }