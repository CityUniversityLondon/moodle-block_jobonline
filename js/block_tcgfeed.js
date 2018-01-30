M.block_tcgfeed =
    {
        init: function()
        {
            console.log('block_tcgfeed js loaded');
            return true;
        },

        updateitem: function(obj,contents)
        {
            if(typeof contents !== 'undefined'  && contents !== 'failed')
            {
                obj.innerHTML=contents;
            }
        },

        // params is an array
        setitem: function(obj,func,params)
        {
            var r=new XMLHttpRequest;
            r.onload = function (e) {
                if (r.readyState === 4)
                {
                    if (r.status === 200)
                    {
                        M.block_tcgfeed.updateitem(obj,r.responseText);
                    }
                }
            }

            console.log('blocks/tcgfeed/brain.php?fn='+func+'&'+encodeURI(params));
            r.open('GET','/blocks/tcgfeed/brain.php?fn='+func+'&'+encodeURI(params));
            r.send(null);
        },

        setsector: function(obj,user)
        {
            this.setitem(document.getElementById('tcgblockwrapper'),'update_sector',
                         ['user='+user,'sector='+obj.value].join('&'));
        },

        settype: function(obj,user)
        {
            this.setitem(document.getElementById('tcgblockwrapper'),'update_type',
                         ['user='+user,'type='+obj.value].join('&'));
        },

        settime: function(obj,user)
        {
            this.setitem(document.getElementById('tcgblockwrapper'),'update_time',
                         ['user='+user,'time='+obj.value].join('&'));
        },

        test: function(object,text)
        {
            object.innerHTML='AAAA'+text;
        },
    };
