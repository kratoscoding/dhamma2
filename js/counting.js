function increaseEit()
    {
        var val = document.getElementById('eit').value;
        document.getElementById('eit').value = ++val;

    }

function decreaseEit()
    {
        var val = document.getElementById('eit').value;
        --val;
        if (val < 0) { val = 0; };
        document.getElementById('eit').value = val;
    }