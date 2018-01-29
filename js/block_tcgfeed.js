M.block_tcgfeed =
    {
        init: function()
        {
            console.log('hello');
            return true;
        },

        setitem: function(id,func)
        {
            document.getElementById(id).innerHTML=getstuff(func);
        },

        getstuff: function(func)
        {
            var r=new XMLHttpRequest;
            r.open('GET','blocks/tcgfeed/brain.php?fn='+func,false);
            r.send(null);
            return r.responseText;
        },

        setsector: function(val)
        {
            console.log(val.value);
        },

        test: function(object,text)
        {
            object.innerHTML='AAAA'+text;
        },
    };
