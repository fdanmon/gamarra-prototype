function handleUrlInput(event)
{
    let e = event || window.event;
    let key = e.keyCode || e.which;
    key = String.fromCharCode(key);
    const regex = /[a-z0-9]|[-_]|[\b]/;
    if(!key.match(regex))
    {
        e.returnValue = false;
        if(!e.defaultPrevented)
        {
            e.preventDefault();
        }
    }
}

function onlyPriceDigit(event)
{
    let e = event || window.event;
    let key = e.keyCode || e.which;
    key = String.fromCharCode(key);
    const regex = /[0-9]|\.|[\b]/;
    if(!key.match(regex))
    {
        e.returnValue = false;
        if(!e.defaultPrevented)
        {
            e.preventDefault();
        }
    }
}

function validatePrice(event)
{
    let e = event || window.event;
    let value = e.target.value;
    const regex = /^[1-9][0-9]*(\.[0-9]{2}){0,1}$/;
    if(!value.match(regex))
    {
        Swal.fire({
            type:'warning',
            title: '¡Valor incorrecto!',
            text: 'El precio no puede tener el formato escrito.'
        });
    }
}

function onlyNumberDigit(event)
{
    let e = event || window.event;
    let key = e.keyCode || e.which;
    key = String.fromCharCode(key);
    const regex = /[0-9]|[\b]/;
    if(!key.match(regex))
    {
        e.returnValue = false;
        if(!e.defaultPrevented)
        {
            e.preventDefault();
        }
    }
}