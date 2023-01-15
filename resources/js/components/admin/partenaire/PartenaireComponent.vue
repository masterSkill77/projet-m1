<template>
    <div>
        <vue-good-table
            max-height="400px"
            :fixed-header="true"
            :columns="partenaireColumns"
            :rows="partenaireRows"
            :search-options="{
                enabled: true,
                skipDiacritics: true,
                placeholder: 'Rechercher',
            }"
            :pagination-options="{
                enabled: true,
                mode: 'records',
                perPage: 15,
                position: 'top',
                perPageDropdown: [3, 7, 9],
                dropdownAllowAll: false,
                setCurrentPage: 1,
                jumpFirstOrLast: true,
                firstLabel: 'Premier Page',
                lastLabel: 'Dernier Page',
                nextLabel: 'Suivant',
                prevLabel: 'Prec',
                rowsPerPageLabel: 'Affichage par page',
                ofLabel: 'de',
                pageLabel: 'page', // for 'pages' mode
                allLabel: 'Tous',
                infoFn: (params) =>
                    `Resultat de ${params.firstRecordOnPage} à ${params.lastRecordOnPage}`,
            }"
        />
    </div>
</template>

<script>
import partenaireService from "./../../../services/PartenaireService";
export default {
    data() {
        return {
            partenaireColumns: {},
            partenaireRows: {},
        };
    },
    async created() {
        this.partenaireColumns = partenaireService.fields;
        this.partenaireRows = await partenaireService.rows;
    },
};
</script>

<style></style>
