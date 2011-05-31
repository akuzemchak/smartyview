# Smartyview

A ridiculously simple Smarty 3 library for CodeIgniter 2

## Installation

1. Download the latest files from right here.
2. Copy the folders and files into their respective areas in your CodeIgniter project.
3. Add `smartyview` to your autoload array, or load it manually with `$this->load->library('smartyview')`.

## Rendering Templates

First, you need to create your data array, just like you would for "normal" views.

`$data = array('title' => 'My Page', 'subtitle' => 'My Subtitle', 'etc' => '...');`

Normally at this point, you would use `$this->load->view('viewfile', $data)` to output your content, but to render a Smarty template, you will do this instead:

`$this->smartyview->render('my-template.tpl', $data);`

By default, your template files will be stored in your `application/views/` directory, and should be named with a `.tpl` extension. You can change the templates directory in the Smartyview config file.

That's it!

## Other Noteworthy Items

In your templates, you should be able to call any CodeIgniter functions, as long as they are enclosed in curly braces:

`{anchor('pages/test', 'Test Page')}`

However, if you are calling any CodeIgniter objects using the `$this` keyword, you will need to use `$CI` instead:

`{$CI->uri->uri_string()}`