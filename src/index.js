import App from "./App";
import { render } from '@wordpress/element';
import './style/main.scss';

// Render the App component into the DOM
render(<App />, document.getElementById('wpreact-dev'));
