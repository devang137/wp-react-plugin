# React Js & Wordpress Plugin Package

 Start WordPress Plugin Development with React JS Package in just few steps

# Getting Started with this Setup

<ul>
  <li> Clone the repository inside of your <code> wp-content/plugins </code> directory </li>
  <li> Rename the cloned plugin directory, <code> wp-vue-plugin.php </code> </li>
  <li> Navigate to the plugin directory and run </br> <code>npm install</code> </br> <code>npm start</code> </li>
  <li> Activate plugin </li>
</ul> 

## Create Your Own Setup

<h6> Step 1: Composer Setup </h6>
<li> Inside plugins directory Create a folder. Run command to install PHP autoload setup <code>composer init</code> </li>

<h6> Step 2: NPM Setup - wp script </h6>
<li> Setup simple npm environment by running <code> npm init </code> </li>

<h6> Step 3: Install @wordpress/scripts </h6>
<li> Install <a href="https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/"> @wordpress/scripts </a>
npm library in dev environment <code>npm install @wordpress/scripts --save-dev</code> </li>

<h6> Step 4: Add this code to Package json file </h6>
<li>
    Add this code to <b> Package json </b> file 

      "scripts": {
        "test": "echo \"Error: no test specified\" && exit 1",
        "build": "wp-scripts build",     
        "start": "wp-scripts start"
      }, 

  </li>
  
<h6> Step 5: Create New File <b> webpack.config.js </b> </h6>  
<li>
    now create new file - <b> webpack.config.js </b> to add React and ReactDOM as external dependency. 
    
      const defaults = require('@wordpress/scripts/config/webpack.config');

       module.exports = {
         ...defaults,
         externals: {
           react: 'React',
           'react-dom': 'ReactDOM',
         },
       }; 
   
  </li>
  
<h6> Step 6: Add code main php file </b> </h6>  
<li>
 Add <code> id="app" </code> to loading react component main PHP File; <br> also add this style & script
 
 <code> wp_enqueue_style( 'app-style', plugin_dir_url( __FILE__ ) . 'build/index.css' ); </code>
 
 <code> wp_enqueue_script( 'app-script', plugin_dir_url( __FILE__ ) . 'build/index.js', array( '' ), '1.0.0', true ); </code>
 
</li>

<h6> Step 7: Add React index file </h6>
<li>
   Create a file <b>index.js</b> inside /src folder - <b>src/index.js</b>

     import { render } from '@wordpress/element';

     const App = () => {
         return (
             <div>
                 <h1 className='wpreact-title'>React Wordpress App</h1>
                 <hr />
             </div>
          );
     }

     render(<App />, document.getElementById('app'));
</li>
