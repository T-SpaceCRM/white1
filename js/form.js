const form = document.getElementById("email-form");

form.addEventListener('submit', (event) => {
    event.preventDefault();
    
    const firstName = document.getElementById("Name-3").value;
    const lastName = document.getElementById("Name-2").value;
    const phoneNumber = document.getElementById("Pone-2").value;
    const utm_medium = 'klimat';

    var regex = /^[A-Za-zА-ЯЁа-яё]+$/;
    const isCorrectName = regex.test(firstName);
    const isCorrectLastName = regex.test(lastName);
    const parsedPhoneNumber = libphonenumber.parsePhoneNumber(phoneNumber, 'RU');
    if(isCorrectName && isCorrectLastName && 
       parsedPhoneNumber.isValid() && parsedPhoneNumber.isPossible() && parsedPhoneNumber.country === 'RU')
    {
        const payLoad = {
            firstName: firstName,
            lastName: lastName,
            phoneNumber: parsedPhoneNumber.number,
            utm_medium: utm_medium
        }
        const formData = new FormData();
        for (const key in payLoad) 
        {
          formData.append(key, payLoad[key]);
        }
        fetch('action.php', {
            method: 'POST',
            body: formData,
        })
        .then(() => 
             {
              const fileThenk = 'thank_you.php'
              window.location.href = `${fileThenk}${window.location.search}`;
             })
             .catch(() => {
                const fileError = 'error.php'
                window.location.href = `${fileError}${window.location.search}`;
             });
    }
    else
    {
        alert("Неверно введены данные, повторите попытку!");
        return false;
    }
});