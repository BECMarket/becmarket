new Vue({
    el:'#app',
    data:{
        url: "http://localhost/BECMarket/",
        dias: '',
        h1: '',
        h2: '',
        tele: '',
        email: '',
        costo: '',
        mensaje: '',
        session_id: ''
    },
    methods:{
        editar: async function(){
            var form = new FormData();
            this.session_id = document.getElementById('session_id').value;
            //datos
            form.append("dias",this.dias);
            form.append("h1",this.h1);
            form.append("h2",this.h2);
            form.append("tele",this.tele);
            form.append("email",this.email);
            form.append("costo",this.costo);
            form.append("session",this.session_id);
            try {
                var rec = 'controladores/EditarDatosNegocio.php';
                const res = await fetch(this.url+rec,{
                    method: 'post',
                    body: form,
                });
                const resp = await res.text();
                console.log(resp);                
                location.reload();
            } catch (error) {
                console.log(error);
            }
        }
    },
    created(){

    }
});