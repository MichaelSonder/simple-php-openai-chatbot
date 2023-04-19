# Introduction
Simple PHP web-application that interacts with OpenAI's ChatGPT
Uses:
- PHP
- HTML
- JS
- CSS
- Bootstrap
- AJAX

Model: gpt-3.5-turbo

# The applications intent
Users have the option to enter questions and receive AI-generated answers. The conversation with the bot is saved with PHP's session, so that the conversation is not deleted when the tab or window is closed. With a button, the conversation can be cleared and the user has the option to start a new session.

# Installation
Install composer from https://getcomposer.org/

From the command line, run:

```sh
composer require orhanerday/open-ai
```

Find your own secret key at https://platform.openai.com/ and replace 'PLACE_YOUR_OPENAI_API_KEY_HERE' in the ai.php file. It is also where you can replace the model with another according to your choice.
