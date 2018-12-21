<div class="col-md-3">
                                        <div class="inbox-sidebar">
                                            <a href="" data-title="Compose" class="btn red compose-btn btn-block">
                                                <i class="fa fa-edit"></i> Compose </a>
                                            <ul class="inbox-nav">
                                                <li <?php if($page_name == "inbox"){?> class="myactive" <?php } ?> >
                                                    <a href="inbox.php"> Inbox
                                                        
                                                    </a>
                                                </li>

                                                <li <?php if($page_name == "important"){?> class="myactive" <?php } ?> >
                                                    <a href="important.php" data-type="important" data-title="Important"> Important </a>
                                                </li>

                                                <li <?php if($page_name == "sent"){?> class="myactive" <?php } ?> >
                                                    <a href="sent.php" data-type="sent" data-title="Sent"> Sent </a>
                                                </li>
                                                <li <?php if($page_name == "draft"){?> class="myactive" <?php } ?>>
                                                    <a href="draft.php" data-type="draft" data-title="Draft"> Draft
                                                        
                                                    </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li <?php if($page_name == "trash"){?> class="myactive" <?php } ?> >
                                                    <a href="trash.php" class="sbold uppercase" data-title="Trash"> Trash
                                                       
                                                    </a>
                                                </li>
                                               
                                            </ul>
                                            
                                        </div>
                                    </div>          