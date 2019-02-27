 function addLink() {
        //Get the selected text and append the extra info
        //Steal from https://stackoverflow.com/questions/2026335/how-to-add-extra-info-to-copied-web-text
        var selection = window.getSelection(),
            pagelink = OCreamCPRight + document.location.href,
            copytext = selection + pagelink,
            newdiv = document.createElement('div');

        //hide the newly created container
        newdiv.style.position = 'absolute';
        newdiv.style.left = '-99999px';

        //insert the container, fill it with the extended text, and define the new selection
        document.body.appendChild(newdiv);
        newdiv.innerHTML = copytext;
        selection.selectAllChildren(newdiv);

        window.setTimeout(function () {
            document.body.removeChild(newdiv);
        }, 100);
    }

    document.addEventListener('copy', addLink);
