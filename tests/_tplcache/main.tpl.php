<?php 
/* Contemplate cached template 'main' */
if (!class_exists('Contemplate_main_Cached'))
{
final class Contemplate_main_Cached extends Contemplate
{    
    /* constructor */
    public function __construct($id=null, $__=null)
    {
        /* initialize internal vars */
        $this->id = null; 
        $this->data = null;
        $this->_renderFunction = null;
        $this->_parent = null;
        $this->_blocks = null;
        
        $this->id = $id;
        
        /* parent tpl assign code starts here */
        
        /* parent tpl assign code ends here */
    }    
    
    /* tpl-defined blocks render code starts here */
    
    /* tpl-defined blocks render code ends here */
    
    /* render a tpl block method */
    public function renderBlock($block, $__instance__=null)
    {
        if ( !$__instance__ ) $__instance__ = $this;
        
        $method = '_blockfn_' . $block;
        
        if ( method_exists($this, $method) ) return $this->{$method}($__instance__);
        
        elseif ( $this->_parent ) return $this->_parent->renderBlock($block, $__instance__);
        
        return '';
    }
    
    /* tpl render method */
    public function render($__data__, $__instance__=null)
    {
        $__p__ = '';
        if ( !$__instance__ ) $__instance__ = $this;
        
        if ( $this->_parent )
        {
            $__p__ = $this->_parent->render($__data__, $__instance__);
        }
        else
        {
            /* tpl main render code starts here */
            $__instance__->data = Contemplate::data( $__data__ ); 
            $__p__ .= '<!DOCTYPE html>' . "\n" . '<html>' . "\n" . "\n" . "\n" . '    <!-- PROOf Of CONCEPT' . "\n" . '    /*' . "\n" . '    *  Simple light-weight template engine for PHP, Python, Node and client-side JavaScript' . "\n" . '    *  @author: Nikos M.  http://nikos-web-development.netai.net/' . "\n" . '    *' . "\n" . '    *  @inspired by : Simple JavaScript Templating, John Resig - http://ejohn.org/ - MIT Licensed' . "\n" . '    *  http://ejohn.org/blog/javascript-micro-templating/' . "\n" . '    *' . "\n" . '    */' . "\n" . '    -->' . "\n" . '    ' . "\n" . '    <head>' . "\n" . '        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />' . "\n" . '        <script src="./js/Contemplate.min.js"></script>' . "\n" . '        <script type="text/html" id="sub_tpl">' . "\n" . '         ' . ( $__instance__->data['templates']["sub"] ) . "\n" . '        </script>' . "\n" . '    </head>' . "\n" . "\n" . '    <body>' . "\n" . '        ' . "\n" . '        <style>#forkongithub a{background:#aa0000;color:#fff;text-decoration:none;font-family:arial, sans-serif;text-align:center;font-weight:bold;padding:5px 40px;font-size:0.9rem;line-height:1.4rem;position:relative;transition:0.5s;}#forkongithub a:hover{background:#aa0000;color:#fff;}#forkongithub a::before,#forkongithub a::after{content:"";width:100%;display:block;position:absolute;z-index:100;top:1px;left:0;height:1px;background:#fff;}#forkongithub a::after{bottom:1px;top:auto;}@media screen and (min-width:800px){#forkongithub{position:absolute;display:block;z-index:100;top:0;right:0;width:200px;overflow:hidden;height:200px;}#forkongithub a{width:200px;position:absolute;top:60px;right:-60px;transform:rotate(45deg);-webkit-transform:rotate(45deg);box-shadow:4px 4px 10px rgba(0,0,0,0.8);}}</style><span id="forkongithub"><a href="https://github.com/foo123/Contemplate">Eat me on GitHub</a></span>' . "\n" . '        ' . "\n" . '        An inline template:' . "\n" . '        <div id="inline">' . ( $__instance__->data['render_inline'] ) . '</div>' . "\n" . '        ' . "\n" . '        <hr />' . "\n" . '                ' . "\n" . '        In the SERVER:' . "\n" . '        <div id="results_server">' . ( $__instance__->data['render_server'] ) . '</div>' . "\n" . '        ' . "\n" . '        <hr />' . "\n" . '        ' . "\n" . '        In the CLIENT:' . "\n" . '        <div id="results_client"></div>' . "\n" . '        <script>' . "\n" . '            /* set the template separators */' . "\n" . '            Contemplate.setTemplateSeparators({"left": "' . ( $__instance__->data['sepleft'] ) . '", "right": "' . ( $__instance__->data['sepright'] ) . '"});' . "\n" . '            /* add the templates */' . "\n" . '            Contemplate.add({' . "\n" . '                \'base\': "./_tpls/base.tpl.html", // load the template from this url using ajax (slower)' . "\n" . '                \'demo\': "./_tpls/demo.tpl.html", // load the template from this url using ajax (slower)' . "\n" . '                "sub" : "#sub_tpl", // load the template from this DOM element' . "\n" . '                \'date\': "./_tpls/date.tpl.html" // load the template from this url using ajax (slower)' . "\n" . '            });' . "\n" . '            ' . "\n" . '            var results = document.getElementById("results_client");' . "\n" . '            results.innerHTML = Contemplate.tpl(\'demo\', ' . ( $__instance__->data['data_client'] ) . ');' . "\n" . '        </script>' . "\n" . '    ' . "\n" . '    </body>' . "\n" . "\n" . '</html>';
            /* tpl main render code ends here */
        }
        $this->data = null;
        return $__p__;
    }
}
}