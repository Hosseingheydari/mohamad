<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <input type = "" v-model = "cource">
                        <p>{{ cource }}</p>
                        <p>{{ auther }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default{
    data() {
        return {
            cource : "saxs" ,
            auther : "hossein"
        }
    }
}

</script>
