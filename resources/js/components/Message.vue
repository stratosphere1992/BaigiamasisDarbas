<template>
    <div>
        <p v-if="showViewConversationOnSuccess">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Send Message</button>
        </p>
            <p v-else>
                <a href="/messages">
                <button type="button" class="btn btn-success">View Conversation</button>
                </a>
            </p>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Send message to {{ sellerName }}  <!--  {{ userId }} {{ receiverId }} {{ adId }} {{ body }} --></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <textarea v-model="body" class="form-control" placeholder="please write your message"></textarea>
                <p v-if="successMessage" style="color: green">Your message has been sent.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" @click.prevent="sendMessage()" >Send message</button>
            </div>
            </div>
        </div>
        </div>
    </div>
</template>

<script>
export default {

    props: ["sellerName", "userId", "receiverId", "adId"],

    data(){
        return{
            body:'',
            successMessage:false,
            showViewConversationOnSuccess:true
        }
    },
    methods: {
        sendMessage()
        {
            if(this.body==''){
                alert('please write your message');
                return;
            }
            axios.post('/send/message',{
                body:this.body,
                receiverId:this.receiverId,
                userId:this.userId,
                adId:this.adId
            }).then((response)=>{
                this.body=''
                this.successMessage=true,
                this.showViewConversationOnSuccess=false
            })
        }
    },
};
</script>