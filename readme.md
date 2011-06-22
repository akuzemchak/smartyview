# Smartyview

A ridiculously simple Smarty 3 Spark for CodeIgniter 2

## Installation

1. [Get Sparks](http://getsparks.org/install).
2. In a terminal, `cd` to your project root and type `php tools/spark install smartyview`.
3. Create the necessary folders in the locations specified in the Smartyview config file.
4. Add Smartyview to your Sparks autoload array:  
`$autoload['sparks'] = array('smartyview/x.x.x');`  
Or, load it manually in your controllers/models/whatever:  
`$this->load->spark('smartyview/x.x.x');`  
Please remember to use the *real* version number of the Spark you installed!

## Rendering Templates

First, you need to create your data array, just like you would for "normal" views.

<pre><code>$data = array(
    'title' => 'My Page',
    'subtitle' => 'My Subtitle',
    'etc' => '...'
);</code></pre>

Normally at this point, you would use `$this->load->view('viewfile', $data)` to output your content, but to render a Smarty template, you will do this instead:

`$this->smartyview->render('my-template.tpl', $data);`

By default, your template files will be stored in your `application/views/` directory, and should be named with either a `.tpl` or `.php` extension. You can change the templates directory in the Smartyview config file.

That's it!

## Need Help Using Smarty?

They have great docs... [check them out](http://www.smarty.net/docs/en/).

## Other Noteworthy Items

In your templates, you should be able to call any CodeIgniter functions, as long as they are enclosed in curly braces:

`{anchor('pages/test', 'Test Page')}`

However, if you are calling any CodeIgniter objects using the `$this` keyword, you will need to use `$CI` instead:

`{$CI->uri->uri_string()}`