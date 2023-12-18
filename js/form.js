const form = document.getElementById("email-form");

form.addEventListener('submit', (event) => {
    event.preventDefault();

    const firstName = document.getElementById("name").value;
    const lastName = document.getElementById("lname").value;
    const phoneNumber = document.getElementById("phone").value;
    const utm_medium = document.getElementById("utm_medium").value;
    const campaing_id = document.getElementById("campaing_id").value;
    const landing = 'SberQuizInvester';
    const slug = document.getElementById("slug").value;
    const source = document.getElementById("source").value;
    const bgeVal = document.getElementById("bge").value;

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
            utm_medium: utm_medium,
            campaing_id: campaing_id,
            landing: landing,
            slug: slug,
            source: source
        }

        console.log(payLoad);

        const formData = new FormData();
        for (const key in payLoad) 
        {
          formData.append(key, payLoad[key]);
        }
        fetch('action.php', {
            method: 'POST',
            body: formData,
        })
        .then((response) => 
             {
               if (response.ok) {
                localStorage.setItem('thanks', true);
                bge('event', 'ec_register', {configId: `${bgeVal}`});
                const fileThenk = `thanks-page.php`;
                window.location.href = `${fileThenk}${window.location.search}`;
               }
               else
               {
                 alert("Вы уже оставили заявку!");
               }
             })
             .catch(() => {
                alert("Произошла ошибка, повторите попытку позже!");
             });
    }
    else
    {
        alert("Неверно введены данные, повторите попытку!");
        return false;
    }

});

function formatPhoneNumber(input) {
    const value = input.value.trim();
    const digitsOnly = value.replace(/[^0-9]/g, '');
    if (!digitsOnly.startsWith("7")) {
      input.value = "+7" + digitsOnly;
    } else {
      input.value = "+" + digitsOnly;
    }

    const submitButton = document.getElementById("submitButton");
    const maxLength = 11;
    const isDisable = digitsOnly.length < maxLength;
    submitButton.disabled = isDisable;

  }