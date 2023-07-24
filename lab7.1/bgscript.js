function checkBloodGroup() 
{
    let bloodGroup = document.getElementsByName("bg")[0];
    let BloodGroup = bloodGroup.value;

    if (BloodGroup === "") 
    {
     alert("Please select a blood group.");
      return;
    } 
    else 
    {
      alert("Selected blood group: " +BloodGroup);
      return;

    }

  }