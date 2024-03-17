<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        :root {
            --light-pink: rgb(255, 240, 245);
            --pink: rgb(255, 227, 227);
            --green: #58a79e;
            --font: "Caladea", serif;
            --peach: #f2a899;
            --purple: #73204f;
        }

        * {
            box-sizing: border-box;
        }

        ::-webkit-input-placeholder {
            /* Edge */
            color: var(--peach);
        }

        :-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: var(--peach);
        }

        ::placeholder {
            color: var(--peach);
        }

        body {
            min-height: 100vh;
            display: grid;
            place-items: center;
            background: var(--light-pink);
            font-size: 1.4rem;
            font-family: var(--font);
        }

        main {
            width: 90%;
            max-width: 60rem;
            margin: auto;
            position: relative;
            padding-bottom: 1.5rem;
        }

        @media (min-width: 768px) {
            main {
                display: grid;
                align-items: self-end;
                grid-template-columns: 41.5% 1fr;
                grid-template-rows: auto max-content;
                padding: 0;
            }
        }

        main h1 {
            font-size: 3.5rem;
            font-weight: 700;
            color: var(--purple);
            margin: 4rem 0 1rem;
        }

        @media (min-width: 768px) {
            main h1 {
                font-size: 4.6rem;
                position: absolute;
                transform: rotate(90deg);
                transform-origin: 0 0;
                align-self: start;
                left: 49%;
                margin: 0;
                z-index: 1;
            }
        }

        #to-do-app {
            @media (min-width: 768px) {
                grid-row: span 2;
            }
        }

        .todos {
            @media (min-width: 768px) {
                min-height: 58vh;
                max-height: 58vh;
                overflow: auto;
            }
        }

        ::-webkit-scrollbar {
            width: 20px;
        }

        ::-webkit-scrollbar-track {
            background: var(--light-pink);
            border-radius: 30px;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--peach);
            border: solid 7px var(--light-pink);
            border-radius: 30px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--peach);
        }

        main .plants {
            flex: 1;
            align-self: end;
            text-align: center;
        }

        main aside {
            text-align: right;
            font: italic 1.4rem var(--font);
            padding: 0 2.5rem;
        }

        .done {
            opacity: 0.6;
        }

        .done:hover {
            opacity: 1;
        }

        .done label {
            text-decoration: line-through;
        }

        svg {
            width: 80%;
            margin: 2rem auto;
            opacity: 0;
            position: relative;
            z-index: 2;
        }

        @media (min-width: 768px) {
            svg {
                width: 103%;
                margin: 0 0 0 -10%;
            }
        }

        .soil {
            transform-origin: center center;
        }

        input {
            box-shadow: none;
            width: 100%;
            padding: 15px 18px;
            background: #fff;
            border: 2px solid var(--peach);
            font: 1.6rem var(--font);
            border-radius: 10px;
            margin-bottom: 10px;
            outline-color: rgba(var(--purple), 0.4);
        }

        li {
            cursor: pointer;
            transition: 0.2s;
            position: relative;
            user-select: none;
        }

        li input {
            display: none;
        }

        li label {
            position: relative;
            vertical-align: middle;
            cursor: pointer;
            padding: 18px 18px 18px 40px;
            display: block;
        }

        li span.box {
            display: inline-block;
            border-radius: 6px;
            border: 2px solid rgba(var(--peach), 0.6);
            width: 26px;
            height: 26px;
            vertical-align: middle;
            transition: 0.3s ease;
            position: absolute;
            left: 0;
            top: 50%;
            transform: translate(0, -50%);
        }

        li span.box:before,
        li span.box:after {
            content: "";
            position: absolute;
            width: 4px;
            height: 16px;
            border-radius: 40px;
            background: white;
            transition: all 0.3s ease;
        }

        li span.box:before {
            transform: rotate(45deg) translateY(-5px) translateX(10px) scale(0);
        }

        li span.box:after {
            height: 8px;
            transform: rotate(-Here's the equivalent CSS code for the provided SCSS:


                ```css:root {
                    --light-pink: rgb(255, 240, 245);
                    --pink: rgb(255, 227, 227);
                    --green: #58a79e;
                    --font: "Caladea", serif;
                    --peach: #f2a899;
                    --purple: #73204f;
                }

                * {
                    box-sizing: border-box;
                }

                ::-webkit-input-placeholder {
                    /* Edge */
                    color: var(--peach);
                }

                :-ms-input-placeholder {
                    /* Internet Explorer 10-11 */
                    color: var(--peach);
                }

                ::placeholder {
                    color: var(--peach);
                }

                body {
                    min-height: 100vh;
                    display: grid;
                    place-items: center;
                    background: var(--light-pink);
                    font-size: 1.4rem;
                    font-family: var(--font);
                }

                main {
                    width: 90%;
                    max-width: 60rem;
                    margin: auto;
                    position: relative;
                    padding-bottom: 1.5rem;
                }

                @media (min-width: 768px) {
                    main {
                        display: grid;
                        align-items: self-end;
                        grid-template-columns: 41.5% 1fr;
                        grid-template-rows: auto max-content;
                        padding: 0;
                    }
                }

                main h1 {
                    font-size: 3.5rem;
                    font-weight: 700;
                    color: var(--purple);
                    margin: 4rem 0 1rem;
                }

                @media (min-width: 768px) {
                    main h1 {
                        font-size: 4.6rem;
                        position: absolute;
                        transform: rotate(90deg);
                        transform-origin: 0 0;
                        align-self: start;
                        left: 49%;
                        margin: 0;
                        z-index: 1;
                    }
                }

                #to-do-app {
                    @media (min-width: 768px) {
                        grid-row: span 2;
                    }
                }

                .todos {
                    @media (min-width: 768px) {
                        min-height: 58vh;
                        max-height: 58vh;
                        overflow: auto;
                    }
                }

                ::-webkit-scrollbar {
                    width: 20px;
                }

                ::-webkit-scrollbar-track {
                    background: var(--light-pink);
                    border-radius: 30px;
                }

                ::-webkit-scrollbar-thumb {
                    background: var(--peach);
                    border: solid 7px var(--light-pink);
                    border-radius: 30px;
                }

                ::-webkit-scrollbar-thumb:hover {
                    background: var(--peach);
                }

                main .plants {
                    flex: 1;
                    align-self: end;
                    text-align: center;
                }

                main aside {
                    text-align: right;
                    font: italic 1.4rem var(--font);
                    padding: 0 2.5rem;
                }

                .done {
                    opacity: 0.6;
                }

                .done:hover {
                    opacity: 1;
                }

                .done label {
                    text-decoration: line-through;
                }

                svg {
                    width: 80%;
                    margin: 2rem auto;
                    opacity: 0;
                    position: relative;
                    z-index: 2;
                }

                @media (min-width: 768px) {
                    svg {
                        width: 103%;
                        margin: 0 0 0 -10%;
                    }
                }

                .soil {
                    transform-origin: center center;
                }

                input {
                    box-shadow: none;
                    width: 100%;
                    padding: 15px 18px;
                    background: #fff;
                    border: 2px solid var(--peach);
                    font: 1.6rem var(--font);
                    border-radius: 10px;
                    margin-bottom: 10px;
                    outline-color: rgba(var(--purple), 0.4);
                }

                li {
                    cursor: pointer;
                    transition: 0.2s;
                    position: relative;
                    user-select: none;
                }

                li input {
                    display: none;
                }

                li label {
                    position: relative;
                    vertical-align: middle;
                    cursor: pointer;
                    padding: 18px 18px 18px 40px;
                    display: block;
                }

                li span.box {
                    display: inline-block;
                    border-radius: 6px;
                    border: 2px solid rgba(var(--peach), 0.6);
                    width: 26px;
                    height: 26px;
                    vertical-align: middle;
                    transition: 0.3s ease;
                    position: absolute;
                    left: 0;
                    top: 50%;
                    transform: translate(0, -50%);
                }

                li span.box:before,
                li span.box:after {
                    content: "";
                    position: absolute;
                    width: 4px;
                    height: 16px;

                    /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
                    *,
                    ::after,
                    ::before {
                        box-sizing: border-box;
                        border-width: 0;
                        border-style: solid;
                        border-color: #e5e7eb
                    }

                    ::after,
                    ::before {
                        --tw-content: ''
                    }

                    :host,
                    html {
                        line-height: 1.5;
                        -webkit-text-size-adjust: 100%;
                        -moz-tab-size: 4;
                        tab-size: 4;
                        font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
                        font-feature-settings: normal;
                        font-variation-settings: normal;
                        -webkit-tap-highlight-color: transparent
                    }

                    body {
                        margin: 0;
                        line-height: inherit
                    }

                    hr {
                        height: 0;
                        color: inherit;
                        border-top-width: 1px
                    }

                    abbr:where([title]) {
                        -webkit-text-decoration: underline dotted;
                        text-decoration: underline dotted
                    }

                    h1,
                    h2,
                    h3,
                    h4,
                    h5,
                    h6 {
                        font-size: inherit;
                        font-weight: inherit
                    }

                    a {
                        color: inherit;
                        text-decoration: inherit
                    }

                    b,
                    strong {
                        font-weight: bolder
                    }

                    code,
                    kbd,
                    pre,
                    samp {
                        font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
                        font-feature-settings: normal;
                        font-variation-settings: normal;
                        font-size: 1em
                    }

                    small {
                        font-size: 80%
                    }

                    sub,
                    sup {
                        font-size: 75%;
                        line-height: 0;
                        position: relative;
                        vertical-align: baseline
                    }

                    sub {
                        bottom: -.25em
                    }

                    sup {
                        top: -.5em
                    }

                    table {
                        text-indent: 0;
                        border-color: inherit;
                        border-collapse: collapse
                    }

                    button,
                    input,
                    optgroup,
                    select,
                    textarea {
                        font-family: inherit;
                        font-feature-settings: inherit;
                        font-variation-settings: inherit;
                        font-size: 100%;
                        font-weight: inherit;
                        line-height: inherit;
                        color: inherit;
                        margin: 0;
                        padding: 0
                    }

                    button,
                    select {
                        text-transform: none
                    }

                    [type=button],
                    [type=reset],
                    [type=submit],
                    button {
                        -webkit-appearance: button;
                        background-color: transparent;
                        background-image: none
                    }

                    :-moz-focusring {
                        outline: auto
                    }

                    :-moz-ui-invalid {
                        box-shadow: none
                    }

                    progress {
                        vertical-align: baseline
                    }

                    ::-webkit-inner-spin-button,
                    ::-webkit-outer-spin-button {
                        height: auto
                    }

                    [type=search] {
                        -webkit-appearance: textfield;
                        outline-offset: -2px
                    }

                    ::-webkit-search-decoration {
                        -webkit-appearance: none
                    }

                    ::-webkit-file-upload-button {
                        -webkit-appearance: button;
                        font: inherit
                    }

                    summary {
                        display: list-item
                    }

                    blockquote,
                    dd,
                    dl,
                    figure,
                    h1,
                    h2,
                    h3,
                    h4,
                    h5,
                    h6,
                    hr,
                    p,
                    pre {
                        margin: 0
                    }

                    fieldset {
                        margin: 0;
                        padding: 0
                    }

                    legend {
                        padding: 0
                    }

                    menu,
                    ol,
                    ul {
                        list-style: none;
                        margin: 0;
                        padding: 0
                    }

                    dialog {
                        padding: 0
                    }

                    textarea {
                        resize: vertical
                    }

                    input::placeholder,
                    textarea::placeholder {
                        opacity: 1;
                        color: #9ca3af
                    }

                    [role=button],
                    button {
                        cursor: pointer
                    }

                    :disabled {
                        cursor: default
                    }

                    audio,
                    canvas,
                    embed,
                    iframe,
                    img,
                    object,
                    svg,
                    video {
                        display: block;
                        vertical-align: middle
                    }

                    img,
                    video {
                        max-width: 100%;
                        height: auto
                    }

                    [hidden] {
                        display: none
                    }

                    *,
                    ::before,
                    ::after {
                        --tw-border-spacing-x: 0;
                        --tw-border-spacing-y: 0;
                        --tw-translate-x: 0;
                        --tw-translate-y: 0;
                        --tw-rotate: 0;
                        --tw-skew-x: 0;
                        --tw-skew-y: 0;
                        --tw-scale-x: 1;
                        --tw-scale-y: 1;
                        --tw-pan-x:;
                        --tw-pan-y:;
                        --tw-pinch-zoom:;
                        --tw-scroll-snap-strictness: proximity;
                        --tw-gradient-from-position:;
                        --tw-gradient-via-position:;
                        --tw-gradient-to-position:;
                        --tw-ordinal:;
                        --tw-slashed-zero:;
                        --tw-numeric-figure:;
                        --tw-numeric-spacing:;
                        --tw-numeric-fraction:;
                        --tw-ring-inset:;
                        --tw-ring-offset-width: 0px;
                        --tw-ring-offset-color: #fff;
                        --tw-ring-color: rgb(59 130 246 / 0.5);
                        --tw-ring-offset-shadow: 0 0 #0000;
                        --tw-ring-shadow: 0 0 #0000;
                        --tw-shadow: 0 0 #0000;
                        --tw-shadow-colored: 0 0 #0000;
                        --tw-blur:;
                        --tw-brightness:;
                        --tw-contrast:;
                        --tw-grayscale:;
                        --tw-hue-rotate:;
                        --tw-invert:;
                        --tw-saturate:;
                        --tw-sepia:;
                        --tw-drop-shadow:;
                        --tw-backdrop-blur:;
                        --tw-backdrop-brightness:;
                        --tw-backdrop-contrast:;
                        --tw-backdrop-grayscale:;
                        --tw-backdrop-hue-rotate:;
                        --tw-backdrop-invert:;
                        --tw-backdrop-opacity:;
                        --tw-backdrop-saturate:;
                        --tw-backdrop-sepia:
                    }

                    ::backdrop {
                        --tw-border-spacing-x: 0;
                        --tw-border-spacing-y: 0;
                        --tw-translate-x: 0;
                        --tw-translate-y: 0;
                        --tw-rotate: 0;
                        --tw-skew-x: 0;
                        --tw-skew-y: 0;
                        --tw-scale-x: 1;
                        --tw-scale-y: 1;
                        --tw-pan-x:;
                        --tw-pan-y:;
                        --tw-pinch-zoom:;
                        --tw-scroll-snap-strictness: proximity;
                        --tw-gradient-from-position:;
                        --tw-gradient-via-position:;
                        --tw-gradient-to-position:;
                        --tw-ordinal:;
                        --tw-slashed-zero:;
                        --tw-numeric-figure:;
                        --tw-numeric-spacing:;
                        --tw-numeric-fraction:;
                        --tw-ring-inset:;
                        --tw-ring-offset-width: 0px;
                        --tw-ring-offset-color: #fff;
                        --tw-ring-color: rgb(59 130 246 / 0.5);
                        --tw-ring-offset-shadow: 0 0 #0000;
                        --tw-ring-shadow: 0 0 #0000;
                        --tw-shadow: 0 0 #0000;
                        --tw-shadow-colored: 0 0 #0000;
                        --tw-blur:;
                        --tw-brightness:;
                        --tw-contrast:;
                        --tw-grayscale:;
                        --tw-hue-rotate:;
                        --tw-invert:;
                        --tw-saturate:;
                        --tw-sepia:;
                        --tw-drop-shadow:;
                        --tw-backdrop-blur:;
                        --tw-backdrop-brightness:;
                        --tw-backdrop-contrast:;
                        --tw-backdrop-grayscale:;
                        --tw-backdrop-hue-rotate:;
                        --tw-backdrop-invert:;
                        --tw-backdrop-opacity:;
                        --tw-backdrop-saturate:;
                        --tw-backdrop-sepia:
                    }

                    .absolute {
                        position: absolute
                    }

                    .relative {
                        position: relative
                    }

                    .-left-20 {
                        left: -5rem
                    }

                    .top-0 {
                        top: 0px
                    }

                    .-bottom-16 {
                        bottom: -4rem
                    }

                    .-left-16 {
                        left: -4rem
                    }

                    .-mx-3 {
                        margin-left: -0.75rem;
                        margin-right: -0.75rem
                    }

                    .mt-4 {
                        margin-top: 1rem
                    }

                    .mt-6 {
                        margin-top: 1.5rem
                    }

                    .flex {
                        display: flex
                    }

                    .grid {
                        display: grid
                    }

                    .hidden {
                        display: none
                    }

                    .aspect-video {
                        aspect-ratio: 16 / 9
                    }

                    .size-12 {
                        width: 3rem;
                        height: 3rem
                    }

                    .size-5 {
                        width: 1.25rem;
                        height: 1.25rem
                    }

                    .size-6 {
                        width: 1.5rem;
                        height: 1.5rem
                    }

                    .h-12 {
                        height: 3rem
                    }

                    .h-40 {
                        height: 10rem
                    }

                    .h-full {
                        height: 100%
                    }

                    .min-h-screen {
                        min-height: 100vh
                    }

                    .w-full {
                        width: 100%
                    }

                    .w-\[calc\(100\%\+8rem\)\] {
                        width: calc(100% + 8rem)
                    }

                    .w-auto {
                        width: auto
                    }

                    .max-w-\[877px\] {
                        max-width: 877px
                    }

                    .max-w-2xl {
                        max-width: 42rem
                    }

                    .flex-1 {
                        flex: 1 1 0%
                    }

                    .shrink-0 {
                        flex-shrink: 0
                    }

                    .grid-cols-2 {
                        grid-template-columns: repeat(2, minmax(0, 1fr))
                    }

                    .flex-col {
                        flex-direction: column
                    }

                    .items-start {
                        align-items: flex-start
                    }

                    .items-center {
                        align-items: center
                    }

                    .items-stretch {
                        align-items: stretch
                    }

                    .justify-end {
                        justify-content: flex-end
                    }

                    .justify-center {
                        justify-content: center
                    }

                    .gap-2 {
                        gap: 0.5rem
                    }

                    .gap-4 {
                        gap: 1rem
                    }

                    .gap-6 {
                        gap: 1.5rem
                    }

                    .self-center {
                        align-self: center
                    }

                    .overflow-hidden {
                        overflow: hidden
                    }

                    .rounded-\[10px\] {
                        border-radius: 10px
                    }

                    .rounded-full {
                        border-radius: 9999px
                    }

                    .rounded-lg {
                        border-radius: 0.5rem
                    }

                    .rounded-md {
                        border-radius: 0.375rem
                    }

                    .rounded-sm {
                        border-radius: 0.125rem
                    }

                    .bg-\[\#FF2D20\]\/10 {
                        background-color: rgb(255 45 32 / 0.1)
                    }

                    .bg-white {
                        --tw-bg-opacity: 1;
                        background-color: rgb(255 255 255 / var(--tw-bg-opacity))
                    }

                    .bg-gradient-to-b {
                        background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
                    }

                    .from-transparent {
                        --tw-gradient-from: transparent var(--tw-gradient-from-position);
                        --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
                        --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
                    }

                    .via-white {
                        --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
                        --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
                    }

                    .to-white {
                        --tw-gradient-to: #fff var(--tw-gradient-to-position)
                    }

                    .stroke-\[\#FF2D20\] {
                        stroke: #FF2D20
                    }

                    .object-cover {
                        object-fit: cover
                    }

                    .object-top {
                        object-position: top
                    }

                    .p-6 {
                        padding: 1.5rem
                    }

                    .px-6 {
                        padding-left: 1.5rem;
                        padding-right: 1.5rem
                    }

                    .py-10 {
                        padding-top: 2.5rem;
                        padding-bottom: 2.5rem
                    }

                    .px-3 {
                        padding-left: 0.75rem;
                        padding-right: 0.75rem
                    }

                    .py-16 {
                        padding-top: 4rem;
                        padding-bottom: 4rem
                    }

                    .py-2 {
                        padding-top: 0.5rem;
                        padding-bottom: 0.5rem
                    }

                    .pt-3 {
                        padding-top: 0.75rem
                    }

                    .text-center {
                        text-align: center
                    }

                    .font-sans {
                        font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji
                    }

                    .text-sm {
                        font-size: 0.875rem;
                        line-height: 1.25rem
                    }

                    .text-sm\/relaxed {
                        font-size: 0.875rem;
                        line-height: 1.625
                    }

                    .text-xl {
                        font-size: 1.25rem;
                        line-height: 1.75rem
                    }

                    .font-semibold {
                        font-weight: 600
                    }

                    .text-black {
                        --tw-text-opacity: 1;
                        color: rgb(0 0 0 / var(--tw-text-opacity))
                    }

                    .text-white {
                        --tw-text-opacity: 1;
                        color: rgb(255 255 255 / var(--tw-text-opacity))
                    }

                    .underline {
                        -webkit-text-decoration-line: underline;
                        text-decoration-line: underline
                    }

                    .antialiased {
                        -webkit-font-smoothing: antialiased;
                        -moz-osx-font-smoothing: grayscale
                    }

                    .shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] {
                        --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.08);
                        --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
                        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
                    }

                    .ring-1 {
                        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
                    }

                    .ring-transparent {
                        --tw-ring-color: transparent
                    }

                    .ring-white\/\[0\.05\] {
                        --tw-ring-color: rgb(255 255 255 / 0.05)
                    }

                    .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] {
                        --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.06));
                        filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
                    }

                    .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] {
                        --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.25));
                        filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
                    }

                    .transition {
                        transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
                        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
                        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
                        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                        transition-duration: 150ms
                    }

                    .duration-300 {
                        transition-duration: 300ms
                    }

                    .selection\:bg-\[\#FF2D20\] *::selection {
                        --tw-bg-opacity: 1;
                        background-color: rgb(255 45 32 / var(--tw-bg-opacity))
                    }

                    .selection\:text-white *::selection {
                        --tw-text-opacity: 1;
                        color: rgb(255 255 255 / var(--tw-text-opacity))
                    }

                    .selection\:bg-\[\#FF2D20\]::selection {
                        --tw-bg-opacity: 1;
                        background-color: rgb(255 45 32 / var(--tw-bg-opacity))
                    }

                    .selection\:text-white::selection {
                        --tw-text-opacity: 1;
                        color: rgb(255 255 255 / var(--tw-text-opacity))
                    }

                    .hover\:text-black:hover {
                        --tw-text-opacity: 1;
                        color: rgb(0 0 0 / var(--tw-text-opacity))
                    }

                    .hover\:text-black\/70:hover {
                        color: rgb(0 0 0 / 0.7)
                    }

                    .hover\:ring-black\/20:hover {
                        --tw-ring-color: rgb(0 0 0 / 0.2)
                    }

                    .focus\:outline-none:focus {
                        outline: 2px solid transparent;
                        outline-offset: 2px
                    }

                    .focus-visible\:ring-1:focus-visible {
                        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
                    }

                    .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                        --tw-ring-opacity: 1;
                        --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
                    }

                    @media (min-width: 640px) {
                        .sm\:size-16 {
                            width: 4rem;
                            height: 4rem
                        }

                        .sm\:size-6 {
                            width: 1.5rem;
                            height: 1.5rem
                        }

                        .sm\:pt-5 {
                            padding-top: 1.25rem
                        }
                    }

                    @media (min-width: 768px) {
                        .md\:row-span-3 {
                            grid-row: span 3 / span 3
                        }
                    }

                    @media (min-width: 1024px) {
                        .lg\:col-start-2 {
                            grid-column-start: 2
                        }

                        .lg\:h-16 {
                            height: 4rem
                        }

                        .lg\:max-w-7xl {
                            max-width: 80rem
                        }

                        .lg\:grid-cols-3 {
                            grid-template-columns: repeat(3, minmax(0, 1fr))
                        }

                        .lg\:grid-cols-2 {
                            grid-template-columns: repeat(2, minmax(0, 1fr))
                        }

                        .lg\:flex-col {
                            flex-direction: column
                        }

                        .lg\:items-end {
                            align-items: flex-end
                        }

                        .lg\:justify-center {
                            justify-content: center
                        }

                        .lg\:gap-8 {
                            gap: 2rem
                        }

                        .lg\:p-10 {
                            padding: 2.5rem
                        }

                        .lg\:pb-10 {
                            padding-bottom: 2.5rem
                        }

                        .lg\:pt-0 {
                            padding-top: 0px
                        }

                        .lg\:text-\[\#FF2D20\] {
                            --tw-text-opacity: 1;
                            color: rgb(255 45 32 / var(--tw-text-opacity))
                        }
                    }

                    @media (prefers-color-scheme: dark) {
                        .dark\:block {
                            display: block
                        }

                        .dark\:hidden {
                            display: none
                        }

                        .dark\:bg-black {
                            --tw-bg-opacity: 1;
                            background-color: rgb(0 0 0 / var(--tw-bg-opacity))
                        }

                        .dark\:bg-zinc-900 {
                            --tw-bg-opacity: 1;
                            background-color: rgb(24 24 27 / var(--tw-bg-opacity))
                        }

                        .dark\:via-zinc-900 {
                            --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                            --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
                        }

                        .dark\:to-zinc-900 {
                            --tw-gradient-to: #18181b var(--tw-gradient-to-position)
                        }

                        .dark\:text-white\/50 {
                            color: rgb(255 255 255 / 0.5)
                        }

                        .dark\:text-white {
                            --tw-text-opacity: 1;
                            color: rgb(255 255 255 / var(--tw-text-opacity))
                        }

                        .dark\:text-white\/70 {
                            color: rgb(255 255 255 / 0.7)
                        }

                        .dark\:ring-zinc-800 {
                            --tw-ring-opacity: 1;
                            --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity))
                        }

                        .dark\:hover\:text-white:hover {
                            --tw-text-opacity: 1;
                            color: rgb(255 255 255 / var(--tw-text-opacity))
                        }

                        .dark\:hover\:text-white\/70:hover {
                            color: rgb(255 255 255 / 0.7)
                        }

                        .dark\:hover\:text-white\/80:hover {
                            color: rgb(255 255 255 / 0.8)
                        }

                        .dark\:hover\:ring-zinc-700:hover {
                            --tw-ring-opacity: 1;
                            --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity))
                        }

                        .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                            --tw-ring-opacity: 1;
                            --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
                        }

                        .dark\:focus-visible\:ring-white:focus-visible {
                            --tw-ring-opacity: 1;
                            --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity))
                        }
                    }
    </style>

</head>

<body>
    <main>
        <h1>Notes</h1>
        <section id="to-do-app">
            <button type="button" class="btn btn-secondary" onclick="window.location.href='{{ route('notes.create') }}'">Back to Index</button>

            <div class="todos">
                <ul id="todos">
                    @foreach ($notes as $note)
                    <li>{{ $note->title }} </li>
                    @endforeach
                </ul>
            </div>
        </section>



        <aside class="pointer">
            <p></p>

        </aside>
    </main>
</body>
<script>
    $("#new-todo").keypress(function(event) {
        var keycode = event.keyCode ? event.keyCode : event.which;
        if (keycode == "13") {
            console.log("pressed");

            if ($(this).val().length !== 0) {
                var toDoCount = $("span.box").length + 1;

                $("#todos").prepend(
                    '<li><input id="checkbox-' +
                    toDoCount +
                    '" type="checkbox"><label for="checkbox-' +
                    toDoCount +
                    '">' +
                    $(this).val() +
                    '<span class="box"></span></label></li>'
                );
                $(this).val("");
            }
        }
    });

    function growPlant() {
        var stage = $("svg").data("stage");
        if (stage < 11) {
            playTimeline(stage);
            $("aside p").text(changeMotivation(stage));
            $("svg").data("stage", stage + 1);
        }
    }

    function changeMotivation(number) {
        switch (number) {
            case 1:
                return "Just. Do. It.";
                break;
            case 2:
                return "Keep moving. Keep hustling.";
                break;
            case 3:
                return "So productive, I can't even.";
                break;
            case 4:
                return "Yeah, you go, Glen Coco.";
                break;
            case 5:
                return "You got this!";
                break;
            case 6:
                return "Productivity is your middle name.";
                break;
            case 7:
                return "DJ Khaled: Another one!";
                break;
            case 8:
                return "You're almost there...";
                break;
            case 9:
                return "One more for good measure.";
                break;
            case 10:
                return "Ta-da!";
                break;
        }
    }

    $("#todos").on("click", "label", function() {
        $(this).closest("li").toggleClass("done");
        if ($(this).closest("li").hasClass("done")) {
            growPlant();
        }
    });

    gsap.registerPlugin(EasePack);

    const tl = gsap.timeline();
    var master = new TimelineMax();

    $(function() {
        tl.fromTo(".soil", {
            scale: 0
        }, {
            duration: 0.4,
            scale: 1
        });
        growPlant();
    });

    function playTimeline(item) {
        tl.to("svg", {
            duration: 0.3,
            opacity: 1,
            ease: Quad.easeInOut
        }, "grow-1");

        tl.fromTo(
            ".grow-1 > g", {
                scale: 0,
                opacity: 0,
                transformOrigin: "bottom center"
            }, {
                duration: 0.35,
                scale: 1,
                opacity: 1,
                stagger: 0.04,
                ease: Quad.easeInOut
            },
            "grow-2"
        );
        tl.fromTo(
            "#cactus-bulb-1", {
                scale: 0,
                opacity: 0,
                transformOrigin: "bottom center"
            }, {
                duration: 0.55,
                scale: 0.3,
                opacity: 1,
                ease: Quad.easeInOut
            },
            "grow-2"
        );

        tl.fromTo(
            ".grow-2 > g", {
                scale: 0,
                opacity: 0,
                transformOrigin: "top center"
            }, {
                duration: 0.44,
                scale: 1,
                opacity: 1,
                stagger: 0.04,
                ease: Quad.easeInOut
            },
            "grow-3"
        );
        tl.to(
            "#cactus-bulb-1", {
                duration: 0.4,
                scale: 0.6,
                opacity: 1,
                ease: Quad.easeInOut
            },
            "grow-3"
        );

        tl.fromTo(
            ".grow-3 > g", {
                scale: 0,
                opacity: 0,
                transformOrigin: "bottom center"
            }, {
                duration: 0.3,
                scale: 1,
                opacity: 1,
                stagger: 0.04,
                ease: Quad.easeInOut
            },
            "grow-4"
        );
        tl.to(
            "#cactus-bulb-1", {
                duration: 0.3,
                scale: 1,
                opacity: 1,
                ease: Quad.easeInOut
            },
            "grow-4"
        );

        tl.fromTo(
            ".grow-4 > g", {
                scale: 0,
                opacity: 0,
                transformOrigin: "bottom center"
            }, {
                duration: 0.4,
                scale: 1,
                opacity: 1,
                stagger: 0.04,
                ease: Quad.easeInOut
            },
            "grow-5"
        );
        tl.fromTo(
            "#long-cactus-1", {
                scale: 0,
                opacity: 0,
                transformOrigin: "bottom center"
            }, {
                duration: 0.4,
                scale: 0.3,
                opacity: 1,
                ease: Quad.easeInOut
            },
            "grow-5"
        );

        tl.to(
            "#long-cactus-1", {
                duration: 0.5,
                scale: 0.6,
                opacity: 1,
                ease: Quad.easeInOut
            },
            "grow-6"
        );
        tl.fromTo(
            ".grow-5 > g", {
                scale: 0,
                opacity: 0,
                transformOrigin: "bottom center"
            }, {
                duration: 0.5,
                scale: 1,
                opacity: 1,
                stagger: 0.04,
                ease: Quad.easeInOut
            },
            "grow-6"
        );

        tl.to(
            "#long-cactus-1", {
                duration: 0.45,
                scale: 1,
                opacity: 1,
                ease: Quad.easeInOut
            },
            "grow-7"
        );
        tl.fromTo(
            ".grow-6 > g", {
                scale: 0,
                opacity: 0,
                transformOrigin: "bottom center"
            }, {
                duration: 0.4,
                scale: 1,
                opacity: 1,
                stagger: 0.04,
                ease: Quad.easeInOut
            },
            "grow-7"
        );
        tl.fromTo(
            "#cactus-bulb-2", {
                scale: 0,
                opacity: 0,
                transformOrigin: "bottom center"
            }, {
                duration: 0.4,
                scale: 1,
                opacity: 1,
                stagger: 0.04,
                ease: Quad.easeInOut
            },
            "grow-7"
        );

        tl.fromTo(
            ".grow-7 > g", {
                scale: 0,
                opacity: 0,
                transformOrigin: "bottom center"
            }, {
                duration: 0.3,
                scale: 1,
                opacity: 1,
                stagger: 0.04,
                ease: Quad.easeInOut
            },
            "grow-8"
        );
        tl.fromTo(
            "#long-cactus-2", {
                scale: 0,
                opacity: 0,
                transformOrigin: "bottom center"
            }, {
                duration: 0.4,
                scale: 1,
                opacity: 1,
                stagger: 0.04,
                ease: Quad.easeInOut
            },
            "grow-8"
        );

        tl.fromTo(
            "#long-cactus-3", {
                scale: 0,
                opacity: 0,
                transformOrigin: "bottom center"
            }, {
                duration: 0.3,
                scale: 1,
                opacity: 1,
                stagger: 0.04,
                ease: Quad.easeInOut
            },
            "grow-9"
        );
        tl.fromTo(
            "#cactus-bulb-3", {
                scale: 0,
                opacity: 0,
                transformOrigin: "bottom center"
            }, {
                duration: 0.4,
                scale: 1,
                opacity: 1,
                stagger: 0.04,
                ease: Quad.easeInOut
            },
            "grow-9"
        );

        tl.fromTo(
            ".grow-8 > g", {
                scale: 0,
                opacity: 0,
                transformOrigin: "bottom center"
            }, {
                duration: 0.5,
                scale: 1,
                opacity: 1,
                stagger: 0.04,
                ease: Quad.easeInOut
            },
            "grow-10"
        );
        tl.fromTo(
            "#long-cactus-4", {
                scale: 0,
                opacity: 0,
                transformOrigin: "bottom center"
            }, {
                duration: 0.5,
                scale: 1,
                opacity: 1,
                stagger: 0.04,
                ease: Quad.easeInOut
            },
            "grow-10"
        );

        tl.tweenFromTo("grow-" + item, "grow-" + (item + 1));
    }
</script>

</html>
