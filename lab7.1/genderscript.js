function checkGender() 
{
    let genderOptions = document.getElementsByName("gender");
    let Gender = "";

    for (let i = 0; i < genderOptions.length; i++) 
    {
      if (genderOptions[i].checked) 
      {
        Gender = genderOptions[i].value;
        break;
      }
    }

    if (Gender === "") 
    {
      alert("At least one of them has to be selected");
      return;
    }

    else 
    {
      alert("Gender is: " + Gender);
      return;
    }

  }