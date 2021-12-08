<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Contact</title><!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formulaire de Contact</title>

    </head>
<body>
<style>

    body {
        margin-top: 150px
    }
    .form .button, .form .label, .form .textarea, .form .text-input {
        padding: 1em 1.5em;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        outline: none;
        line-height: normal;
        border: 1px solid transparent;
        border-radius: 0;
    }

    .form .textarea, .form .text-input {
        font: inherit;
        line-height: normal;
        width: 100%;
        box-sizing: border-box;
        display: block;
        padding-left: 0;
        border-bottom-color: rgba(0, 0, 0, 0.3);
        background: transparent;
        outline: none;
        color: black;
    }
    }
    .form .textarea:-webkit-autofill, .form .text-input:-webkit-autofill {
        box-shadow: 0 0 0px 1000px white inset;
        border-top-color: white;
        border-left-color: white;
        border-right-color: white;
    }
    .form .error.textarea, .form .error.text-input, .error .form .textarea, .form .error .textarea, .error .form .text-input, .form .error .text-input {
        border-color: transparent transparent red transparent;
    }
    .form:not(.has-floated-label) .textarea:active, .form:not(.has-floated-label) .text-input:active, .form:not(.has-floated-label) .textarea:focus, .form:not(.has-floated-label) .text-input:focus {
        border-color: transparent transparent black transparent;
    }

    .form .label {
        position: absolute;
        z-index: 10;
        pointer-events: none;
        padding-left: 0;
    }

    .form .label {
        top: 0;
        left: 0;
        color: rgba(0, 0, 0, 0.7);
        transition: color 0.3s;
    }
    .active .form .label, .form .active .label {
        font-size: 0.75em;
        line-height: 1;
        font-weight: 600;
        text-transform: uppercase;
        padding: 0;
        color: rgba(0, 0, 0, 0.7);
        background: white;
    }
    .focus .form .label, .form .focus .label {
        color: black;
    }

    .form.has-floated-label .field:after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0%;
        border-bottom: 1px solid black;
        transition: width 0.3s cubic-bezier(0.455, 0.03, 0.515, 0.955);
    }

    .form.has-floated-label .field.focus:after {
        width: 100%;
    }

    .form .button {
        font: inherit;
        line-height: normal;
        cursor: pointer;
        background-color: black;
        color: white;
        text-transform: uppercase;
        text-align: center;
        letter-spacing: 0.1428571429em;
    }
    .form .button:hover, .form .button:focus, .form .button:active {
        color: white;
        background: black;
    }
    .form .button:active {
        position: relative;
        top: 1px;
        left: 1px;
    }

    .form {
        max-width: 50em;
        margin: 0 auto;
        padding: 1em 2em;
        box-sizing: border-box;
        overflow: hidden;
    }
    .form .field {
        position: relative;
        width: 100%;
        margin-bottom: 1.5em;
        float: left;
    }
    @media screen and (min-width: 40em) {
        .form .field.half {
            width: calc(50% - 2em);
            margin-right: 2em;
        }
        .form .field.half + .half {
            margin-left: 2em;
            margin-right: 0;
        }
    }
    .form .field:last-child {
        float: right;
        width: auto;
    }
    .form .textarea {
        max-width: 100%;
    }
    svg path {
        fill: black;
    }

</style>
<div id='wrapper'>
    <form action='' class='form'>
        <p class='field required half'>
            <label class='label required' for='name'></label>
            <input class='text-input' id='name' name='name' required type='text' placeholder="Name">
        </p>
        <p class='field required half'>
            <label class='label' for='email'></label>
            <input class='text-input' id='email' name='email' required type='email' placeholder="E-Mail">
        </p>
        <p class='field'>
            <label class='label' for='message'></label>
            <textarea class='textarea' cols='50' id='message' name='message' required rows='4' placeholder="Your Message"></textarea>
        </p>
        <p class='field'>
            <input class='button' type='submit' value='Send message' formaction="./ ">
        </p>
    </form>
</div>
</body>
