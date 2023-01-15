const axios = require("./../plugins/axios");
const fields = [
    {
        label: "ID",
        field: "id",
        type: "number",
    },
    {
        label: "Nom",
        field: "partenaire_name",
    },
    {
        label: "Responsable",
        field: "partenaire_responsable",
    },
    {
        label: "Email",
        field: "partenaire_mail",
    },
    {
        label: "Contact",
        field: "partenaire_phone",
    },
    {
        label: "Adresse",
        field: "partenaire_location",
    },
];

const rows = axios.get("/partenaire").then(({ data }) => {
    return data;
});

export default { fields, rows };
