M.block_tcgfeed =
    {
        init: function()
        {
            console.log('hello');
            return true;
        },

        // params is an array
        setitem: function(obj,func,params)
        {
            console.log(obj);
            r=this.getstuff(func,params);
            if(typeof r !== 'undefined'  && r !== 'failed')
            {
                obj.innerHTML=r;
            }
        },

        getstuff: function(func,params)
        {
            var r=new XMLHttpRequest;
            console.log('blocks/tcgfeed/brain.php?fn='+func+'&'+encodeURI(params));
            r.open('GET','/blocks/tcgfeed/brain.php?fn='+func+'&'+encodeURI(params),true);
            r.send(null);
            return r.responseText;
        },

        setsector: function(obj,session,user)
        {
            this.setitem(document.getElementById('tcgblockwrapper'),'update_sector',
                         ['session='+session,'user='+user,'sector='+obj.value].join('&'));
            console.log(obj.value);
        },

        test: function(object,text)
        {
            object.innerHTML='AAAA'+text;
        },
    };
