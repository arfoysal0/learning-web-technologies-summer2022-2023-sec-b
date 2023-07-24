function checkDegree() 
{
    let degreeOptions = document.getElementsByName("degree");
    let Degree = "";
    let isChecked = false;


    for (let i = 0; i < degreeOptions.length; i++) 
    {
      if (degreeOptions[i].checked) {
        isChecked = true;
        Degree = degreeOptions[i].value;
        break;
      }

    }


    if (!isChecked) 
    {
      alert("Please select at least one degree option.");
      return false;
    }
    else 
    {
      alert("Chosen degree: " + Degree);
    }

  }