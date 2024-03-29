jQuery(document).ready(function($)
{
    // postTax: is the Post Type and Taxonomy structure
    var post_types = apl_admin_ui_settings.post_types;
    var postTax = apl_admin_ui_settings.postTax;
    var taxTerms = apl_admin_ui_settings.taxTerms;
    // postTax_parent_selector: show which Post Types are heirarchical
    var postTax_parent_selector = apl_admin_ui_settings.postTax_parent_selector;

    
    // Sets everything up inside the accordian divider
    //  -Parent Selector (MultiSelect)
    //  -Category & Tag UI Tabs
    //  -3 Checks (Possibly move to APL-admin.js)
    for (var post_type_name in postTax)
    {
        
        //Sets the MultiSelect Post Parent Selector
        $("#slctParentSelector-" + post_type_name).multiselect({
            noneSelectedText: "Select Parent",
            selectedText: "# of # pages selected",
            selectedList: 2,
            height: 192,
            buttonWidth:230,
            menuWidth:275,
            
            //Function for when an option is clicked and update/refreshed the element
            click: function(event, ui)
            {
                
                for (var post_type in post_types)
                {
                    // GET/INIT Parent IDs array
                    var parentIDs =  $("#slctParentSelector-" + post_type).val();
                    if (parentIDs === null)
                    {
                        parentIDs = new Array();
                    }
                    // INIT Temp Array to replace Parent Selector
                    var tmp_array = new Array();
                    
                    //Going to add clicked value
                    if (ui.checked === true)
                    {
                        tmp_array = parentIDs;
                        //Add the value at the end of the Array
                        tmp_array[parentIDs.length] = ui.value;
                    }
                    //Going to withhold clicked value
                    else
                    {
                        var i = 0;
                        for (var parent_index in parentIDs)
                        {
                            //Prevent the value from being copied to the array
                            if (parentIDs[parent_index] !== ui.value)
                            {
                                tmp_array[i] = parentIDs[parent_index];
                                i++;
                            }
                        }
                    }
                    $("#slctParentSelector-" + post_type).val(tmp_array);
                    $("#slctParentSelector-" + post_type).multiselect('refresh');
                }                    
            }//END of click function
        });//END of multiselect
        
        //Disables the Parent Selector/MultiSelect if the Post Type is non-heirarchical/posts
        if (postTax_parent_selector[post_type_name]['hierarchical'] === false)
        {
            $("#slctParentSelector-" + post_type_name).multiselect("disable");
        }

        //$( "#chkReq-" + post_type_name ).button();
        //$( "#chkIncld-" + post_type_name ).button();
        
        // Sets up the Categories UI Tabs
        $("#tabs-" + post_type_name + '-cats').tabs();
        $('#tabs-' + post_type_name + '-cats').children().each(function(index, domEle)
        {
            var div_size = $(this).parent().height();
            
            if (index !== 0)
            {
                var tab_size =  $(this).parent().children().first().height();
                var change = div_size - tab_size;
                
                var domPadding = $('#' + domEle.id).outerHeight() - $('#' + domEle.id).height();
                
                change -= (domPadding);
                $(domEle).height(change);
                
                
            }
        });
        
        // Sets up the Tags UI Tabs
        $("#tabs-" + post_type_name + '-tags').tabs();
        $('#tabs-' + post_type_name + '-tags').children().each(function(index, domEle)
        {
            var div_size = $(this).parent().height();

            if (index !== 0)
            {
                var tab_size =  $(this).parent().children().first().height();
                var change = div_size - tab_size;
                
                var domPadding = $('#' + domEle.id).outerHeight() - $('#' + domEle.id).height();
                
                change -= (domPadding);
                $(domEle).height(change);
            }
        });
        
        
        for (var taxonomy in postTax[post_type_name].taxonomies)
        {
            
            $('#chkReqTerms-' + post_type_name + '-' + taxonomy).click(function(){
                if (this.checked === true)
                {
                    var name = this.name;
                    var name_explode = name.split("-");
                    $('#chkTerm-' + name_explode[1] + '-' + name_explode[2] + '-0').attr('checked', false);
                }
            });
            
            $('#chkIncldTerms-' + post_type_name + '-' + taxonomy).click(function(){
                if (this.checked === true)
                {
                    var name = this.name;
                    var name_explode = name.split("-");
                    $('#chkTerm-' + name_explode[1] + '-' + name_explode[2] + '-0').attr('checked', false);
                }
            });
            
            $('#chkTerm-' + post_type_name + '-' + taxonomy + '-0').click(function(){
                if (this.checked === true)
                {
                    var name = this.name;
                    var name_explode = name.split("-");
                    $('#chkReqTerms-' + name_explode[1] + '-' + name_explode[2]).attr('checked', false);
                    $('#chkIncldTerms-' + name_explode[1] + '-' + name_explode[2]).attr('checked', false);
                    for (var term_index in taxTerms[name_explode[2]].terms)
                    {
                        $('#' + name_explode[0] + '-' + name_explode[1] + '-' + name_explode[2] + '-' + taxTerms[name_explode[2]].terms[term_index]).attr('checked', false);

                    }
                }
            });
            
            for (var term_index in taxTerms[taxonomy].terms)
            {
                
                $('#chkTerm-' + post_type_name + '-' + taxonomy + '-' + taxTerms[taxonomy].terms[term_index]).click(function(){
                    if (this.checked === true)
                    {
                        var name = this.name;
                        var name_explode = name.split("-");
                        $('#' + name_explode[0] + '-' + name_explode[1] + '-' + name_explode[2] + '-0').attr('checked', false);
                    }
                });
            }
        }
    }//END of foreach post_type

    $("#cboPostVisibility").multiselect({
        header: false,
        noneSelectedText: "1 Req.",
        selectedList: 1,
        //buttonWidth: 96, Does NOTHING now.
        minWidth: 96,
        menuWidth: 128,
        height: 69,
        
        click:function(event, ui)
        {
            var elemCbo = $("#cboPostVisibility").val();
            if (elemCbo === null)
            {
                elemCbo = new Array();
            }
            var tmp_array = new Array();
            
            if (ui.checked === true)
            {
                tmp_array = elemCbo;
                //Add the value at the end of the Array
                tmp_array[elemCbo.length] = ui.value;
            }
            else 
            {
                var i = 0;
                for (var elemCbo_index in elemCbo)
                {
                    //Prevent the value from being copied to the array
                    if (elemCbo[elemCbo_index] !== ui.value)
                    {
                        tmp_array[i] = elemCbo[elemCbo_index];
                        i++;
                    }
                }
            }

            $("#cboPostVisibility").val(tmp_array);
            $("#cboPostVisibility").multiselect('refresh');
            
            
        },
                
        //Prevents an empty value to be stored. At least 1 option must be selected
        close:function(event,ui)
        {
            var values = $("#cboPostVisibility").val();
            if (values === null)
            {
                var default_value = new Array('public');
                $("#cboPostVisibility").val(default_value);
                $("#cboPostVisibility").multiselect('refresh');
            }
        }
    });
    $("#cboPostStatus").multiselect({
        header: false,
        noneSelectedText: "Any",
        selectedList: 1,
        //buttonWidth: 128,
        minWidth: 128,
        menuWidth: 160,
        
        click:function(event, ui)
        {
            var elemCbo = $("#cboPostStatus").val();
            if (elemCbo === null)
            {
                elemCbo = new Array();
            }
            var tmp_array = new Array();
            
            if (ui.checked === true)
            {
                tmp_array = elemCbo;
                //Add the value at the end of the Array
                tmp_array[elemCbo.length] = ui.value;
            }
            else 
            {
                var i = 0;
                for (var elemCbo_index in elemCbo)
                {
                    //Prevent the value from being copied to the array
                    if (elemCbo[elemCbo_index] !== ui.value)
                    {
                        tmp_array[i] = elemCbo[elemCbo_index];
                        i++;
                    }
                }
            }

            $("#cboPostStatus").val(tmp_array);
            $("#cboPostStatus").multiselect('refresh');
            
            
        }
    });

    $("#slctAuthorOperator").multiselect({
        multiple: false,
        header: false,
        selectedList: 1,
        //buttonWidth: 96,
        minWidth: 96,
        menuWidth: 128,
        height:96,
        click:function(event, ui){

            if (ui.value === "none")
            {
                var newArr = new Array();
                $("#cboAuthorIDs").val(newArr);
                $("#cboAuthorIDs").multiselect('refresh');
                $("#cboAuthorIDs").multiselect("disable");
            }
            else
            {
                $("#cboAuthorIDs").multiselect("enable");
            }
            $("#slctAuthorOperator").val(ui.value);
            $("#slctAuthorOperator").multiselect('refresh');
        }
    });
    $("#cboAuthorIDs").multiselect({
        header: false,
        noneSelectedText: '-None-',
        selectedList: 1,
        //buttonWidth: 128,
        minWidth: 128,
        menuWidth: 256,
        
        click:function(event, ui)
        {
            var elemCbo = $("#cboAuthorIDs").val();
            if (elemCbo === null)
            {
                elemCbo = new Array();
            }
            var tmp_array = new Array();
            
            if (ui.checked === true)
            {
                tmp_array = elemCbo;
                //Add the value at the end of the Array
                tmp_array[elemCbo.length] = ui.value;
            }
            else 
            {
                var i = 0;
                for (var elemCbo_index in elemCbo)
                {
                    //Prevent the value from being copied to the array
                    if (elemCbo[elemCbo_index] !== ui.value)
                    {
                        tmp_array[i] = elemCbo[elemCbo_index];
                        i++;
                    }
                }
            }

            $("#cboAuthorIDs").val(tmp_array);
            $("#cboAuthorIDs").multiselect('refresh');
        }
    });
    $("#cboAuthorIDs").multiselect("disable");

    $("#slctUserPerm").multiselect({
        multiple: false,
        header: false,
        noneSelectedText: false,
        selectedList: 1,
        //buttonWidth: 96,
        minWidth: 96,
        menuWidth: 128,
        height: 69,
        
        click:function(event, ui)
        {
            $("#slctUserPerm").val(ui.value);
            $("#slctUserPerm").multiselect('refresh');
        }
    });

    //(ELEMENT - Exclude Post IDs)
    
    //(ELEMENT - List Amount)

    $("#slctOrderBy").multiselect({
        multiple: false,
        header: false,
        noneSelectedText: "Select an Option",
        selectedList: 1,
        //buttonWidth: 132,
        minWidth: 132,
        menuWidth: 192,
        
        click:function(event, ui)
        {
            $("#slctOrderBy").val(ui.value);
            $("#slctOrderBy").multiselect('refresh');
        }
    });
    $("#slctOrder").multiselect({
        multiple: false,
        header: false,
        noneSelectedText: "Select an Option",
        selectedList: 1,
        //buttonWidth: 128,
        minWidth: 128,
        menuWidth: 160,
        height: 69,
        
        click:function(event, ui)
        {
            $("#slctOrder").val(ui.value);
            $("#slctOrder").multiselect('refresh');
        }
    });

    //(ELEMENT - Ignore Sticky Posts)
    
    //(ELEMENT - Exclude Current Post)
    
    //(ELEMENT - Exclude Duplicates from Current Post)


    $("#btnSavePreset").button();
    $("#btnSaveSettings").button();
    $("#btnExport").button();
    $("#btnImport").button();
    $("#btnRestorePreset").button();
    $("#info10").click(function()
    {
        $("#d10").dialog({ width: 640, height: 480 });
    });
    $("#info11").click(function()
    {
        $("#d11").dialog({ width: 640, height: 480 });
    });
    $("#info12").click(function()
    {
        $("#d12").dialog({ width: 640});
    });
    $("#info13").click(function()
    {
        $("#d13").dialog({ width: 640, height: 480 });
    });
    $("#info14").click(function()
    {
        $("#d14").dialog({ width: 640 });
    });
    $("#info15").click(function()
    {
        $("#d15").dialog({ width: 640 });
    });
    $("#info16").click(function()
    {
        $("#d16").dialog({ width: 640 });
    });
    $("#divCustomPostTaxonomyContent").accordion({
        icons: false
    });
    $("#divCustomPostTaxonomyContent").children().each(function(index, domEle)
    {

        if(domEle.localName === 'div')
        {
            $(domEle).height(356);
        }
    });

});