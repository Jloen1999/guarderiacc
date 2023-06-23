$('#content').innerhtml = "HOla";
async function main() {
    const url = 'https://text-translator2.p.rapidapi.com/translate';
    const content = $('#content').textContent;

    const options = {
        method: 'POST',
        headers: {
            'content-type': 'application/x-www-form-urlencoded',
            'X-RapidAPI-Key': '62b10b2293msh02f6f436710e05ep158c3djsn8bca3d51cf9e',
            'X-RapidAPI-Host': 'text-translator2.p.rapidapi.com'
        },
        body: new URLSearchParams({
            source_language: 'en',
            target_language: 'es',
            text: content
        })
    };

    try {
        const response = await fetch(url, options);
        const result = await response.text();

        console.log(result);
    } catch (error) {
        console.error(error);
    }
}

main();