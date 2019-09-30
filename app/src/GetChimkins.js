export const getChimkin = () => {
    let http = new XMLHttpRequest();
    let url = "https://api.thecatapi.com/v1/images/search?breed_ids=sphy";
    let key = {
        "x-api-key": "7446e3a4-068f-45cd-bf4a-4da200970f1d"
    }

    http.open('get', url, true);
    http.setRequestHeader('x-api-key', key["x-api-key"]);
    http.responseType = 'json';
    http.send();

    http.onreadystatechange = (e) => {
        return http.response;
        console.log(http.response.JSON + "++++++++++++++++++++++++++++++++++++++++=");
    }
}

export default getChimkin;

