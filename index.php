<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UI Kit :: Page de test</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="/assets/base.css">
    <link rel="stylesheet" href="/uikit/css/all.css">
</head>
<body>
    <h1>HTML form input types test page</h1>

    <div class="test-page-wrapper ui-kit">
        <form action="." class="aligned">
            <p>Common form inputs.</p>

            <div class="form-block">
                <label for="type-text">Text (text)</label>
                <input name="type-text" id="type-text" type="text">
            </div>

            <div class="form-block">
                <label for="type-select">Text (text)</label>
                <div class="select">
                    <select name="type-select" id="type-select">
                        <option value=""></option>
                        <option value="0">First value</option>
                        <option value="1">Second value</option>
                        <option value="2">Third value</option>
                        <option value="3">Fourth value</option>
                        <option value="4">Fifth value</option>
                    </select>
                </div>
            </div>

            <div class="form-block">
                <label for="type-textarea">Text (text)</label>
                <textarea name="type-textarea" id="type-textarea" cols="30" rows="10"></textarea>
            </div>

            <p>The following fields are examples of the form controls that can be created with the new values for the
                `input` element’s `type` attribute in HTML5.</p>

            <div class="form-block">
                <label for="type-search">Search (search)</label>
                <input name="type-search" id="type-search" type="search">
            </div>

            <div class="form-block">
                <label for="type-tel">Telephone (tel)</label>
                <input name="type-tel" id="type-tel" type="tel">
            </div>

            <div class="form-block">
                <label for="type-url">URL (url)</label>
                <input name="type-url" id="type-url" type="url">
            </div>

            <div class="form-block">
                <label for="type-email">E-mail (email)</label>
                <input name="type-email" id="type-email" type="email">
            </div>

            <div class="form-block">
                <label for="type-datetime">Date and Time (datetime)</label>
                <input name="type-datetime" id="type-datetime" type="datetime">
            </div>

            <div class="form-block">
                <label for="type-date">Date (date)</label>
                <input name="type-date" id="type-date" type="date">
            </div>

            <div class="form-block">
                <label for="type-month">Month (month)</label>
                <input name="type-month" id="type-month" type="month">
            </div>

            <div class="form-block">
                <label for="type-week">Week (week)</label>
                <input name="type-week" id="type-week" type="week">
            </div>

            <div class="form-block">
                <label for="type-time">Time (time)</label>
                <input name="type-time" id="type-time" type="time">
            </div>

            <div class="form-block">
                <label for="type-datetime-local">Local Date and Time (datetime-local)</label>
                <input name="type-datetime-local" id="type-datetime-local" type="datetime-local">
            </div>

            <div class="form-block">
                <label for="type-number">Number (number)</label>
                <input name="type-number" id="type-number" min="0" max="20" type="number">
            </div>

            <div class="form-block">
                <label for="type-range">Range (range)</label>
                <input name="type-range" id="type-range" min="0" max="100" type="range">
            </div>

            <div class="form-block">
                <label for="type-color">Colour (color)</label>
                <input name="type-color" id="type-color" type="color">
            </div>

            <div class="submit-area">
                <input value="Submit" type="submit">
            </div>

            <div class="submit-area">
                <button>Button</button>
            </div>
        </form>
    </div>

</body>
</html>

