<div class="m-auto mb-5 mt-1">
    <?php
                if(isset($ErrorMessage)){
                    echo '<div class="alert alert-dismissible alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>'. $ErrorMessage. '</strong>
                    </div>';
                    
                    $ErrorMessage = null;
                }

                if(isset($SuccessMessage)){
                    echo '<div class="alert alert-dismissible alert-success">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>'. $SuccessMessage. '</strong>
                    </div>';
                    
                    $SuccessMessage = null;
                }
                
            ?>
</div>
<div class="row">
    <div class="col-sm-8">
        <div class="jumbotron pt-2 pb-2">
            <h2 class="display-4 text-secondary">How to... how to... how to...</h2>
            <p style="font-size:16px" class="mt-3">
                Are you tired of endless typing of "how to" questions?
                You visited several commercial platforms (Stack overflow, gfg, ...) and you are still not happy?
                How many hours have you spent searching for the answer?
            </p>
            <hr class="my-4">
            <p style="font-size:16px">
                Well, if you want to change that you are on the right place.
                Welcome to QueueOverflow, the fastest rising technical support platform!
                We have outstanding database of all-around questions as well as higly-trained 
                agents that answer to your questions in live chats!
            </p>
            <p style="font-size:16px">
                Check out our questions :)
                <br />
                <br />
                <a class="btn btn-primary btn-lg" href="/Home/Search" role="button">View questions</a>
            </p>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card text-white bg-secondary mb-3" >
            <div class="card-header"><strong>Register !!!</strong></div>
            <div class="card-body">
                <p class="card-text">
                    If you are already satisfied with our site, register and become our client!
                    Clients have even more options, such as: posting and replying to questions, 
                    advanced search and live chats! 
                </p>
            </div>
        </div>
        <div class="card text-white bg-secondary mb-3">
            <div class="card-header"><strong>Become agent ?</strong></div>
            <div class="card-body">
                <p class="card-text">
                    You see yourself as agent, repliying to clients questions and getting payed for it?
                    Apply for this position here, by sending CV and cover-letter to 
                    <strong>
                        queueoverflow@gmail.com!
                    </strong>
                </p>
            </div>
        </div>    
    </div>
</div>