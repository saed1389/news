<div class="sidebar p-2 py-md-3 @@cardClass">
    <div class="container-fluid">
        <!-- sidebar: title-->
        <div class="title-text d-flex align-items-center mb-4 mt-1">
            <h4 class="sidebar-title mb-0 flex-grow-1"><span class="sm-txt">I</span><span>nventory</span></h4>
        </div>
        <!-- sidebar: Create new -->
        <div class="create-new py-3 mb-2">
            <div class="d-flex">
                <select class="form-select rounded-pill me-1">
                    <option selected>Select Project</option>
                    <option value="1">Luno University</option>
                    <option value="2">Book Manager</option>
                    <option value="3">Luno Sass App</option>
                </select>
                <button class="btn bg-primary text-white rounded-circle" data-bs-toggle="modal" data-bs-target="#CreateNew" type="button"><i class="fa fa-plus"></i></button>
            </div>
        </div>
        <!-- sidebar: menu list -->
        <div class="main-menu flex-grow-1">
            <ul class="menu-list">
                <li class="divider py-2 lh-sm"><span class="small">MAIN</span><br> <small class="text-muted">Unique dashboard designs </small></li>
                <li>
                    <a class="m-link active" href="index.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                            <path class="fill-secondary" fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                        </svg>
                        <span class="ms-2">My Dashboard</span>
                    </a>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Applications" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                            <path class="fill-secondary" d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        </svg>
                        <span class="ms-2">Applications</span>
                        <span class="arrow fa fa-angle-right ms-auto text-end"></span>
                    </a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-Applications">
                        <li><a class="ms-link" href="app-calendar.html">Calendar</a></li>
                        <li><a class="ms-link" href="app-calendar-tui.html">tui Calendar</a></li>
                        <li><a class="ms-link" href="app-email.html">Email App</a></li>
                        <li><a class="ms-link" href="app-chat.html">Chat app</a></li>
                        <li><a class="ms-link" href="app-campaigns.html">Campaigns</a></li>
                        <li><a class="ms-link" href="app-social.html">Social App</a></li>
                        <li><a class="ms-link" href="app-file-manager.html">File Manager</a></li>
                        <li><a class="ms-link" href="app-todo.html">Todo App</a></li>
                        <li><a class="ms-link" href="app-contacts.html">Contacts</a></li>
                        <li><a class="ms-link" href="app-tasks.html">Tasks</a></li>
                        <li><a class="ms-link" href="app-project.html">Projects</a></li>
                        <li><a class="ms-link" href="app-jkanban.html">Kanban Board</a></li>
                        <li><a class="ms-link" href="app-blog.html">Blog</a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Account" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2 1C1.46957 1 0.960859 1.21071 0.585786 1.58579C0.210714 1.96086 0 2.46957 0 3L0 13C0 13.5304 0.210714 14.0391 0.585786 14.4142C0.960859 14.7893 1.46957 15 2 15H14C14.5304 15 15.0391 14.7893 15.4142 14.4142C15.7893 14.0391 16 13.5304 16 13V3C16 2.46957 15.7893 1.96086 15.4142 1.58579C15.0391 1.21071 14.5304 1 14 1H2ZM1 3C1 2.73478 1.10536 2.48043 1.29289 2.29289C1.48043 2.10536 1.73478 2 2 2H14C14.2652 2 14.5196 2.10536 14.7071 2.29289C14.8946 2.48043 15 2.73478 15 3V13C15 13.2652 14.8946 13.5196 14.7071 13.7071C14.5196 13.8946 14.2652 14 14 14H2C1.73478 14 1.48043 13.8946 1.29289 13.7071C1.10536 13.5196 1 13.2652 1 13V3ZM2 5.5C2 5.36739 2.05268 5.24021 2.14645 5.14645C2.24021 5.05268 2.36739 5 2.5 5H6C6.13261 5 6.25979 5.05268 6.35355 5.14645C6.44732 5.24021 6.5 5.36739 6.5 5.5C6.5 5.63261 6.44732 5.75979 6.35355 5.85355C6.25979 5.94732 6.13261 6 6 6H2.5C2.36739 6 2.24021 5.94732 2.14645 5.85355C2.05268 5.75979 2 5.63261 2 5.5ZM2 8.5C2 8.36739 2.05268 8.24021 2.14645 8.14645C2.24021 8.05268 2.36739 8 2.5 8H6C6.13261 8 6.25979 8.05268 6.35355 8.14645C6.44732 8.24021 6.5 8.36739 6.5 8.5C6.5 8.63261 6.44732 8.75979 6.35355 8.85355C6.25979 8.94732 6.13261 9 6 9H2.5C2.36739 9 2.24021 8.94732 2.14645 8.85355C2.05268 8.75979 2 8.63261 2 8.5ZM2 10.5C2 10.3674 2.05268 10.2402 2.14645 10.1464C2.24021 10.0527 2.36739 10 2.5 10H6C6.13261 10 6.25979 10.0527 6.35355 10.1464C6.44732 10.2402 6.5 10.3674 6.5 10.5C6.5 10.6326 6.44732 10.7598 6.35355 10.8536C6.25979 10.9473 6.13261 11 6 11H2.5C2.36739 11 2.24021 10.9473 2.14645 10.8536C2.05268 10.7598 2 10.6326 2 10.5Z" />
                            <path class="fill-secondary" d="M8.5 11C8.5 11 8 11 8 10.5C8 10 8.5 8.5 11 8.5C13.5 8.5 14 10 14 10.5C14 11 13.5 11 13.5 11H8.5ZM11 8C11.3978 8 11.7794 7.84196 12.0607 7.56066C12.342 7.27936 12.5 6.89782 12.5 6.5C12.5 6.10218 12.342 5.72064 12.0607 5.43934C11.7794 5.15804 11.3978 5 11 5C10.6022 5 10.2206 5.15804 9.93934 5.43934C9.65804 5.72064 9.5 6.10218 9.5 6.5C9.5 6.89782 9.65804 7.27936 9.93934 7.56066C10.2206 7.84196 10.6022 8 11 8V8Z" />
                        </svg>
                        <span class="ms-2">Account</span>
                        <span class="arrow fa fa-angle-right ms-auto text-end"></span>
                    </a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-Account">
                        <li><a class="ms-link" href="account-settings.html">Settings</a></li>
                        <li><a class="ms-link" href="account-invoices.html">Invoice List</a></li>
                        <li><a class="ms-link" href="account-create-invoice.html">Create Invoices</a></li>
                        <li><a class="ms-link" href="account-billing.html">Billing</a></li>
                    </ul>
                </li>
                <li>
                    <a class="m-link" href="items.html">
                        <svg width="18" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-secondary" d="M4 10C4 9.73478 4.10536 9.48043 4.29289 9.29289C4.48043 9.10536 4.73478 9 5 9C5.26522 9 5.51957 9.10536 5.70711 9.29289C5.89464 9.48043 6 9.73478 6 10V12C6 12.2652 5.89464 12.5196 5.70711 12.7071C5.51957 12.8946 5.26522 13 5 13C4.73478 13 4.48043 12.8946 4.29289 12.7071C4.10536 12.5196 4 12.2652 4 12V10ZM7 10C7 9.73478 7.10536 9.48043 7.29289 9.29289C7.48043 9.10536 7.73478 9 8 9C8.26522 9 8.51957 9.10536 8.70711 9.29289C8.89464 9.48043 9 9.73478 9 10V12C9 12.2652 8.89464 12.5196 8.70711 12.7071C8.51957 12.8946 8.26522 13 8 13C7.73478 13 7.48043 12.8946 7.29289 12.7071C7.10536 12.5196 7 12.2652 7 12V10ZM10 10C10 9.73478 10.1054 9.48043 10.2929 9.29289C10.4804 9.10536 10.7348 9 11 9C11.2652 9 11.5196 9.10536 11.7071 9.29289C11.8946 9.48043 12 9.73478 12 10V12C12 12.2652 11.8946 12.5196 11.7071 12.7071C11.5196 12.8946 11.2652 13 11 13C10.7348 13 10.4804 12.8946 10.2929 12.7071C10.1054 12.5196 10 12.2652 10 12V10Z" />
                            <path d="M5.757 1.071C5.81335 1.10474 5.86249 1.14925 5.90163 1.20199C5.94077 1.25473 5.96914 1.31467 5.98511 1.37837C6.00108 1.44207 6.00435 1.5083 5.99472 1.57327C5.98509 1.63823 5.96276 1.70067 5.929 1.757L3.383 6H12.617L10.07 1.757C10.0018 1.64322 9.98167 1.50703 10.0139 1.37838C10.0462 1.24973 10.1282 1.13916 10.242 1.071C10.3558 1.00284 10.492 0.98267 10.6206 1.01493C10.7493 1.04718 10.8598 1.12922 10.928 1.243L13.783 6H15.5C15.6326 6 15.7598 6.05268 15.8536 6.14645C15.9473 6.24022 16 6.36739 16 6.5V7.5C16 7.63261 15.9473 7.75979 15.8536 7.85356C15.7598 7.94732 15.6326 8 15.5 8H14.877L13.033 14.456C12.9882 14.6129 12.8935 14.7508 12.7632 14.849C12.6329 14.9472 12.4741 15.0002 12.311 15H3.69C3.52687 15.0002 3.36812 14.9472 3.23783 14.849C3.10754 14.7508 3.01281 14.6129 2.968 14.456L1.123 8H0.5C0.367392 8 0.240215 7.94732 0.146447 7.85356C0.0526784 7.75979 0 7.63261 0 7.5V6.5C0 6.36739 0.0526784 6.24022 0.146447 6.14645C0.240215 6.05268 0.367392 6 0.5 6H2.217L5.07 1.243C5.10374 1.18666 5.14825 1.13751 5.20099 1.09837C5.25373 1.05923 5.31366 1.03086 5.37737 1.01489C5.44107 0.998917 5.5073 0.995652 5.57227 1.00528C5.63723 1.01491 5.69967 1.03724 5.756 1.071H5.757ZM2.163 8L3.877 14H12.123L13.837 8H2.163Z" />
                        </svg>
                        <span class="ms-2">Items</span>
                    </a>
                </li>
                <li>
                    <a class="m-link" href="sales-orders.html">
                        <svg width="18" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.985 8.50001H8.20698L2.70698 14C3.82973 14.9905 5.20793 15.6461 6.68482 15.8922C8.1617 16.1383 9.678 15.9649 11.0613 15.3919C12.4445 14.8189 13.6392 13.8692 14.5095 12.6508C15.3797 11.4325 15.8916 9.99434 15.985 8.50001ZM1.99998 13.292C1.00944 12.1693 0.353862 10.7911 0.107801 9.31418C-0.138261 7.83729 0.0350724 6.32099 0.608086 4.93774C1.1811 3.55448 2.1308 2.35979 3.34916 1.48954C4.56752 0.619291 6.00565 0.108414 7.49998 0.0150146V7.79301L1.99998 13.293V13.292Z" />
                            <path class="fill-secondary" d="M8.5 7.50001V0.0150146C10.4452 0.136897 12.279 0.964622 13.6572 2.34279C15.0354 3.72096 15.8631 5.5548 15.985 7.50001H8.5Z" />
                        </svg>
                        <span class="ms-2">Sales Orders</span>
                    </a>
                </li>
                <li>
                    <a class="m-link" href="purchase-orders.html">
                        <svg width="18" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 3C14.2652 3 14.5196 3.10536 14.7071 3.29289C14.8946 3.48043 15 3.73478 15 4V12C15 12.2652 14.8946 12.5196 14.7071 12.7071C14.5196 12.8946 14.2652 13 14 13H2C1.73478 13 1.48043 12.8946 1.29289 12.7071C1.10536 12.5196 1 12.2652 1 12V4C1 3.73478 1.10536 3.48043 1.29289 3.29289C1.48043 3.10536 1.73478 3 2 3H14ZM2 2C1.46957 2 0.960859 2.21071 0.585786 2.58579C0.210714 2.96086 0 3.46957 0 4L0 12C0 12.5304 0.210714 13.0391 0.585786 13.4142C0.960859 13.7893 1.46957 14 2 14H14C14.5304 14 15.0391 13.7893 15.4142 13.4142C15.7893 13.0391 16 12.5304 16 12V4C16 3.46957 15.7893 2.96086 15.4142 2.58579C15.0391 2.21071 14.5304 2 14 2H2Z" />
                            <path class="fill-secondary" d="M2 5.5C2 5.36739 2.05268 5.24021 2.14645 5.14645C2.24021 5.05268 2.36739 5 2.5 5H4.5C4.63261 5 4.75979 5.05268 4.85355 5.14645C4.94732 5.24021 5 5.36739 5 5.5V6.5C5 6.63261 4.94732 6.75979 4.85355 6.85355C4.75979 6.94732 4.63261 7 4.5 7H2.5C2.36739 7 2.24021 6.94732 2.14645 6.85355C2.05268 6.75979 2 6.63261 2 6.5V5.5ZM2 8.5C2 8.36739 2.05268 8.24021 2.14645 8.14645C2.24021 8.05268 2.36739 8 2.5 8H7.5C7.63261 8 7.75979 8.05268 7.85355 8.14645C7.94732 8.24021 8 8.36739 8 8.5C8 8.63261 7.94732 8.75979 7.85355 8.85355C7.75979 8.94732 7.63261 9 7.5 9H2.5C2.36739 9 2.24021 8.94732 2.14645 8.85355C2.05268 8.75979 2 8.63261 2 8.5ZM2 10.5C2 10.3674 2.05268 10.2402 2.14645 10.1464C2.24021 10.0527 2.36739 10 2.5 10H3.5C3.63261 10 3.75979 10.0527 3.85355 10.1464C3.94732 10.2402 4 10.3674 4 10.5C4 10.6326 3.94732 10.7598 3.85355 10.8536C3.75979 10.9473 3.63261 11 3.5 11H2.5C2.36739 11 2.24021 10.9473 2.14645 10.8536C2.05268 10.7598 2 10.6326 2 10.5ZM5 10.5C5 10.3674 5.05268 10.2402 5.14645 10.1464C5.24021 10.0527 5.36739 10 5.5 10H6.5C6.63261 10 6.75979 10.0527 6.85355 10.1464C6.94732 10.2402 7 10.3674 7 10.5C7 10.6326 6.94732 10.7598 6.85355 10.8536C6.75979 10.9473 6.63261 11 6.5 11H5.5C5.36739 11 5.24021 10.9473 5.14645 10.8536C5.05268 10.7598 5 10.6326 5 10.5ZM8 10.5C8 10.3674 8.05268 10.2402 8.14645 10.1464C8.24021 10.0527 8.36739 10 8.5 10H9.5C9.63261 10 9.75979 10.0527 9.85355 10.1464C9.94732 10.2402 10 10.3674 10 10.5C10 10.6326 9.94732 10.7598 9.85355 10.8536C9.75979 10.9473 9.63261 11 9.5 11H8.5C8.36739 11 8.24021 10.9473 8.14645 10.8536C8.05268 10.7598 8 10.6326 8 10.5ZM11 10.5C11 10.3674 11.0527 10.2402 11.1464 10.1464C11.2402 10.0527 11.3674 10 11.5 10H12.5C12.6326 10 12.7598 10.0527 12.8536 10.1464C12.9473 10.2402 13 10.3674 13 10.5C13 10.6326 12.9473 10.7598 12.8536 10.8536C12.7598 10.9473 12.6326 11 12.5 11H11.5C11.3674 11 11.2402 10.9473 11.1464 10.8536C11.0527 10.7598 11 10.6326 11 10.5Z" />
                        </svg>
                        <span class="ms-2">Purchase Orders</span>
                    </a>
                </li>
                <li>
                    <a class="m-link" href="category.html">
                        <svg width="18" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-secondary" d="M6.5 1C6.10218 1 5.72064 1.15804 5.43934 1.43934C5.15804 1.72064 5 2.10218 5 2.5V3H1.5C1.10218 3 0.720644 3.15804 0.43934 3.43934C0.158035 3.72064 0 4.10218 0 4.5L0 5.884L7.614 7.914C7.86693 7.98136 8.13307 7.98136 8.386 7.914L16 5.884V4.5C16 4.10218 15.842 3.72064 15.5607 3.43934C15.2794 3.15804 14.8978 3 14.5 3H11V2.5C11 2.10218 10.842 1.72064 10.5607 1.43934C10.2794 1.15804 9.89782 1 9.5 1H6.5ZM6.5 2H9.5C9.63261 2 9.75979 2.05268 9.85355 2.14645C9.94732 2.24022 10 2.36739 10 2.5V3H6V2.5C6 2.36739 6.05268 2.24022 6.14645 2.14645C6.24021 2.05268 6.36739 2 6.5 2Z" />
                            <path d="M0 13.5C0 13.8978 0.158035 14.2793 0.43934 14.5606C0.720644 14.8419 1.10218 15 1.5 15H14.5C14.8978 15 15.2794 14.8419 15.5607 14.5606C15.842 14.2793 16 13.8978 16 13.5V6.84998L8.129 8.94698C8.04448 8.96955 7.95552 8.96955 7.871 8.94698L0 6.84998V13.5Z" />
                        </svg>
                        <span class="ms-2">Category</span>
                    </a>
                </li>
                <li>
                    <a class="m-link" href="bills.html">
                        <svg width="18" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-secondary" d="M3 4.5C3 4.36739 3.05268 4.24021 3.14645 4.14645C3.24021 4.05268 3.36739 4 3.5 4H9.5C9.63261 4 9.75979 4.05268 9.85355 4.14645C9.94732 4.24021 10 4.36739 10 4.5C10 4.63261 9.94732 4.75979 9.85355 4.85355C9.75979 4.94732 9.63261 5 9.5 5H3.5C3.36739 5 3.24021 4.94732 3.14645 4.85355C3.05268 4.75979 3 4.63261 3 4.5ZM3 6.5C3 6.36739 3.05268 6.24021 3.14645 6.14645C3.24021 6.05268 3.36739 6 3.5 6H9.5C9.63261 6 9.75979 6.05268 9.85355 6.14645C9.94732 6.24021 10 6.36739 10 6.5C10 6.63261 9.94732 6.75979 9.85355 6.85355C9.75979 6.94732 9.63261 7 9.5 7H3.5C3.36739 7 3.24021 6.94732 3.14645 6.85355C3.05268 6.75979 3 6.63261 3 6.5ZM3 8.5C3 8.36739 3.05268 8.24021 3.14645 8.14645C3.24021 8.05268 3.36739 8 3.5 8H9.5C9.63261 8 9.75979 8.05268 9.85355 8.14645C9.94732 8.24021 10 8.36739 10 8.5C10 8.63261 9.94732 8.75979 9.85355 8.85355C9.75979 8.94732 9.63261 9 9.5 9H3.5C3.36739 9 3.24021 8.94732 3.14645 8.85355C3.05268 8.75979 3 8.63261 3 8.5ZM3 10.5C3 10.3674 3.05268 10.2402 3.14645 10.1464C3.24021 10.0527 3.36739 10 3.5 10H9.5C9.63261 10 9.75979 10.0527 9.85355 10.1464C9.94732 10.2402 10 10.3674 10 10.5C10 10.6326 9.94732 10.7598 9.85355 10.8536C9.75979 10.9473 9.63261 11 9.5 11H3.5C3.36739 11 3.24021 10.9473 3.14645 10.8536C3.05268 10.7598 3 10.6326 3 10.5ZM3 12.5C3 12.3674 3.05268 12.2402 3.14645 12.1464C3.24021 12.0527 3.36739 12 3.5 12H9.5C9.63261 12 9.75979 12.0527 9.85355 12.1464C9.94732 12.2402 10 12.3674 10 12.5C10 12.6326 9.94732 12.7598 9.85355 12.8536C9.75979 12.9473 9.63261 13 9.5 13H3.5C3.36739 13 3.24021 12.9473 3.14645 12.8536C3.05268 12.7598 3 12.6326 3 12.5ZM11.5 4C11.3674 4 11.2402 4.05268 11.1464 4.14645C11.0527 4.24021 11 4.36739 11 4.5C11 4.63261 11.0527 4.75979 11.1464 4.85355C11.2402 4.94732 11.3674 5 11.5 5H12.5C12.6326 5 12.7598 4.94732 12.8536 4.85355C12.9473 4.75979 13 4.63261 13 4.5C13 4.36739 12.9473 4.24021 12.8536 4.14645C12.7598 4.05268 12.6326 4 12.5 4H11.5ZM11.5 6C11.3674 6 11.2402 6.05268 11.1464 6.14645C11.0527 6.24021 11 6.36739 11 6.5C11 6.63261 11.0527 6.75979 11.1464 6.85355C11.2402 6.94732 11.3674 7 11.5 7H12.5C12.6326 7 12.7598 6.94732 12.8536 6.85355C12.9473 6.75979 13 6.63261 13 6.5C13 6.36739 12.9473 6.24021 12.8536 6.14645C12.7598 6.05268 12.6326 6 12.5 6H11.5ZM11.5 8C11.3674 8 11.2402 8.05268 11.1464 8.14645C11.0527 8.24021 11 8.36739 11 8.5C11 8.63261 11.0527 8.75979 11.1464 8.85355C11.2402 8.94732 11.3674 9 11.5 9H12.5C12.6326 9 12.7598 8.94732 12.8536 8.85355C12.9473 8.75979 13 8.63261 13 8.5C13 8.36739 12.9473 8.24021 12.8536 8.14645C12.7598 8.05268 12.6326 8 12.5 8H11.5ZM11.5 10C11.3674 10 11.2402 10.0527 11.1464 10.1464C11.0527 10.2402 11 10.3674 11 10.5C11 10.6326 11.0527 10.7598 11.1464 10.8536C11.2402 10.9473 11.3674 11 11.5 11H12.5C12.6326 11 12.7598 10.9473 12.8536 10.8536C12.9473 10.7598 13 10.6326 13 10.5C13 10.3674 12.9473 10.2402 12.8536 10.1464C12.7598 10.0527 12.6326 10 12.5 10H11.5ZM11.5 12C11.3674 12 11.2402 12.0527 11.1464 12.1464C11.0527 12.2402 11 12.3674 11 12.5C11 12.6326 11.0527 12.7598 11.1464 12.8536C11.2402 12.9473 11.3674 13 11.5 13H12.5C12.6326 13 12.7598 12.9473 12.8536 12.8536C12.9473 12.7598 13 12.6326 13 12.5C13 12.3674 12.9473 12.2402 12.8536 12.1464C12.7598 12.0527 12.6326 12 12.5 12H11.5Z" />
                            <path d="M2.354 0.645978C2.29798 0.589911 2.22943 0.547966 2.154 0.523602C2.07858 0.499238 1.99845 0.493154 1.92021 0.505852C1.84197 0.518549 1.76787 0.549665 1.70403 0.596631C1.64018 0.643598 1.58842 0.70507 1.553 0.775978L1.053 1.77598C1.01815 1.84551 1.00001 1.92221 1 1.99998V15H0.5C0.367392 15 0.240215 15.0527 0.146447 15.1464C0.0526784 15.2402 0 15.3674 0 15.5C0 15.6326 0.0526784 15.7598 0.146447 15.8535C0.240215 15.9473 0.367392 16 0.5 16H15.5C15.6326 16 15.7598 15.9473 15.8536 15.8535C15.9473 15.7598 16 15.6326 16 15.5C16 15.3674 15.9473 15.2402 15.8536 15.1464C15.7598 15.0527 15.6326 15 15.5 15H15V1.99998C15 1.92221 14.9818 1.84551 14.947 1.77598L14.447 0.775978C14.4115 0.705251 14.3598 0.643947 14.296 0.597106C14.2323 0.550265 14.1583 0.519224 14.0802 0.506534C14.0021 0.493843 13.9221 0.499867 13.8468 0.524108C13.7715 0.54835 13.703 0.590117 13.647 0.645978L13 1.29298L12.354 0.645978C12.3076 0.599415 12.2524 0.562472 12.1916 0.537266C12.1309 0.512059 12.0658 0.499084 12 0.499084C11.9342 0.499084 11.8691 0.512059 11.8084 0.537266C11.7476 0.562472 11.6924 0.599415 11.646 0.645978L11 1.29298L10.354 0.645978C10.3076 0.599415 10.2524 0.562472 10.1916 0.537266C10.1309 0.512059 10.0658 0.499084 10 0.499084C9.93423 0.499084 9.86911 0.512059 9.80837 0.537266C9.74762 0.562472 9.69245 0.599415 9.646 0.645978L9 1.29298L8.354 0.645978C8.30755 0.599415 8.25238 0.562472 8.19163 0.537266C8.13089 0.512059 8.06577 0.499084 8 0.499084C7.93423 0.499084 7.86911 0.512059 7.80837 0.537266C7.74762 0.562472 7.69245 0.599415 7.646 0.645978L7 1.29298L6.354 0.645978C6.30755 0.599415 6.25238 0.562472 6.19163 0.537266C6.13089 0.512059 6.06577 0.499084 6 0.499084C5.93423 0.499084 5.86911 0.512059 5.80837 0.537266C5.74762 0.562472 5.69245 0.599415 5.646 0.645978L5 1.29298L4.354 0.645978C4.30755 0.599415 4.25238 0.562472 4.19163 0.537266C4.13089 0.512059 4.06577 0.499084 4 0.499084C3.93423 0.499084 3.86911 0.512059 3.80837 0.537266C3.74762 0.562472 3.69245 0.599415 3.646 0.645978L3 1.29298L2.354 0.645978ZM2.137 1.84398L2.647 2.35398C2.74076 2.44771 2.86792 2.50037 3.0005 2.50037C3.13308 2.50037 3.26024 2.44771 3.354 2.35398L4 1.70698L4.646 2.35398C4.69245 2.40054 4.74762 2.43748 4.80837 2.46269C4.86911 2.4879 4.93423 2.50087 5 2.50087C5.06577 2.50087 5.13089 2.4879 5.19163 2.46269C5.25238 2.43748 5.30755 2.40054 5.354 2.35398L6 1.70698L6.646 2.35398C6.69245 2.40054 6.74762 2.43748 6.80837 2.46269C6.86911 2.4879 6.93423 2.50087 7 2.50087C7.06577 2.50087 7.13089 2.4879 7.19163 2.46269C7.25238 2.43748 7.30755 2.40054 7.354 2.35398L8 1.70698L8.646 2.35398C8.69245 2.40054 8.74762 2.43748 8.80837 2.46269C8.86911 2.4879 8.93423 2.50087 9 2.50087C9.06577 2.50087 9.13089 2.4879 9.19163 2.46269C9.25238 2.43748 9.30755 2.40054 9.354 2.35398L10 1.70698L10.646 2.35398C10.6924 2.40054 10.7476 2.43748 10.8084 2.46269C10.8691 2.4879 10.9342 2.50087 11 2.50087C11.0658 2.50087 11.1309 2.4879 11.1916 2.46269C11.2524 2.43748 11.3076 2.40054 11.354 2.35398L12 1.70698L12.646 2.35398C12.6924 2.40054 12.7476 2.43748 12.8084 2.46269C12.8691 2.4879 12.9342 2.50087 13 2.50087C13.0658 2.50087 13.1309 2.4879 13.1916 2.46269C13.2524 2.43748 13.3076 2.40054 13.354 2.35398L13.863 1.84398L14 2.11798V15H2V2.11798L2.137 1.84398Z" />
                        </svg>
                        <span class="ms-2">Bills</span>
                    </a>
                </li>
                <li>
                    <a class="m-link" href="statistics.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H1V15H16V16H0V0Z"></path>
                            <path class="fill-secondary" d="M10.1465 3.14645C10.0527 3.24021 10 3.36739 10 3.5C10 3.63261 10.0527 3.75979 10.1465 3.85355C10.2402 3.94732 10.3674 4 10.5 4H13.445L9.96301 8.256L7.35401 5.646C7.30288 5.59492 7.24129 5.55554 7.17347 5.53055C7.10565 5.50557 7.03323 5.49559 6.96118 5.50129C6.88914 5.50699 6.81918 5.52825 6.75614 5.56359C6.6931 5.59893 6.63847 5.64751 6.59601 5.706L2.59601 11.206C2.52384 11.3134 2.4961 11.4446 2.51862 11.572C2.54114 11.6994 2.61217 11.8131 2.71678 11.8892C2.82139 11.9653 2.95144 11.9979 3.0796 11.9802C3.20775 11.9624 3.32403 11.8957 3.40401 11.794L7.06001 6.767L9.64701 9.354C9.69641 9.4033 9.75557 9.44172 9.82071 9.46678C9.88585 9.49184 9.95551 9.50299 10.0252 9.4995C10.0949 9.49602 10.1631 9.47798 10.2254 9.44655C10.2877 9.41511 10.3428 9.37099 10.387 9.317L14 4.9V7.5C14 7.63261 14.0527 7.75979 14.1465 7.85355C14.2402 7.94732 14.3674 8 14.5 8C14.6326 8 14.7598 7.94732 14.8536 7.85355C14.9473 7.75979 15 7.63261 15 7.5V3.5C15 3.36739 14.9473 3.24021 14.8536 3.14645C14.7598 3.05268 14.6326 3 14.5 3H10.5C10.3674 3 10.2402 3.05268 10.1465 3.14645Z"></path>
                        </svg>
                        <span class="ms-2">Statistics</span>
                    </a>
                </li>
            </ul>
            <ul class="menu-list">
                <li class="divider py-2 lh-sm"><span class="small">RESOURCES</span><br> <small class="text-muted">you need to know about LUNO</small></li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Authentication" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M5.33801 1.59C4.38559 1.85248 3.43965 2.1379 2.50101 2.446C2.41529 2.47376 2.3391 2.52504 2.28111 2.59399C2.22312 2.66295 2.18567 2.7468 2.17301 2.836C1.61901 6.993 2.89901 10.026 4.42601 12.024C5.07252 12.8784 5.84341 13.6311 6.71301 14.257C7.05901 14.501 7.36501 14.677 7.60601 14.79C7.72601 14.847 7.82401 14.885 7.89901 14.908C7.93181 14.9195 7.96562 14.9279 8.00001 14.933C8.03398 14.9275 8.06743 14.9191 8.10001 14.908C8.17601 14.885 8.27401 14.847 8.39401 14.79C8.63401 14.677 8.94101 14.5 9.28701 14.257C10.1566 13.6311 10.9275 12.8784 11.574 12.024C13.101 10.027 14.381 6.993 13.827 2.836C13.8145 2.74676 13.777 2.66285 13.719 2.59388C13.661 2.52491 13.5848 2.47366 13.499 2.446C12.848 2.233 11.749 1.886 10.662 1.591C9.55201 1.29 8.53101 1.067 8.00001 1.067C7.47001 1.067 6.44801 1.289 5.33801 1.59ZM5.07201 0.56C6.15701 0.265 7.31001 0 8.00001 0C8.69001 0 9.84301 0.265 10.928 0.56C12.038 0.86 13.157 1.215 13.815 1.43C14.0901 1.52085 14.334 1.68747 14.5187 1.9107C14.7034 2.13394 14.8213 2.40474 14.859 2.692C15.455 7.169 14.072 10.487 12.394 12.682C11.6824 13.621 10.834 14.4479 9.87701 15.135C9.5461 15.3728 9.19549 15.5819 8.82901 15.76C8.54901 15.892 8.24801 16 8.00001 16C7.75201 16 7.45201 15.892 7.17101 15.76C6.80452 15.5819 6.45391 15.3728 6.12301 15.135C5.16603 14.4478 4.31759 13.621 3.60601 12.682C1.92801 10.487 0.545005 7.169 1.14101 2.692C1.17869 2.40474 1.29665 2.13394 1.48132 1.9107C1.666 1.68747 1.9099 1.52085 2.18501 1.43C3.1402 1.11681 4.10281 0.826725 5.07201 0.56Z" />
                            <path class="fill-secondary" d="M8 5.38462C8.21217 5.38462 8.41566 5.46566 8.56569 5.60992C8.71571 5.75418 8.8 5.94983 8.8 6.15385V6.53846H7.2V6.15385C7.2 5.94983 7.28429 5.75418 7.43431 5.60992C7.58434 5.46566 7.78783 5.38462 8 5.38462ZM9.2 6.53846V6.15385C9.2 5.84783 9.07357 5.55434 8.84853 5.33795C8.62348 5.12157 8.31826 5 8 5C7.68174 5 7.37652 5.12157 7.15147 5.33795C6.92643 5.55434 6.8 5.84783 6.8 6.15385V6.53846C6.58783 6.53846 6.38434 6.61951 6.23431 6.76376C6.08429 6.90802 6 7.10368 6 7.30769V9.23077C6 9.43478 6.08429 9.63044 6.23431 9.7747C6.38434 9.91896 6.58783 10 6.8 10H9.2C9.41217 10 9.61566 9.91896 9.76569 9.7747C9.91571 9.63044 10 9.43478 10 9.23077V7.30769C10 7.10368 9.91571 6.90802 9.76569 6.76376C9.61566 6.61951 9.41217 6.53846 9.2 6.53846Z" />
                        </svg>
                        <span class="ms-2">Authentication</span>
                        <span class="arrow fa fa-angle-right ms-auto text-end"></span>
                    </a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-Authentication">
                        <li><a class="ms-link" href="../auth-404.html">404</a></li>
                        <li><a class="ms-link" href="../auth-403.html">403</a></li>
                        <li><a class="ms-link" href="../auth-500.html">500</a></li>
                        <li><a class="ms-link" href="../auth-signin.html">Sign in</a></li>
                        <li><a class="ms-link" href="../auth-signup.html">Sign up</a></li>
                        <li><a class="ms-link" href="../auth-password-reset.html">Password reset</a></li>
                        <li><a class="ms-link" href="../auth-two-step.html">2-Step Authentication</a></li>
                        <li><a class="ms-link" href="../auth-lockscreen.html">Lockscreen</a></li>
                        <li><a class="ms-link" href="../auth-maintenance.html">Maintenance</a></li>
                    </ul>
                </li>
                <li>
                    <a class="m-link" href="../docs/index.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                            <path class="fill-secondary" d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                            <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                            <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                        </svg>
                        <span class="ms-2">Documentation</span>
                    </a>
                </li>
                <li>
                    <a class="m-link" href="../docs/doc-changelog.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                            <path class="fill-secondary" d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg>
                        <span class="ms-2">Changelog</span>
                        <span id="Changelog"></span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- sidebar: footer link -->
        <!-- sidebar: footer link -->
        <ul class="menu-list nav navbar-nav flex-row text-center menu-footer-link">
            <li class="nav-item flex-fill p-2">
                <a class="d-inline-block w-100 color-400" href="#" data-bs-toggle="modal" data-bs-target="#ScheduleModal" title="My Schedule">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                        <path class="fill-secondary" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
                        <path class="fill-secondary" d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z" />
                    </svg>
                </a>
            </li>
            <li class="nav-item flex-fill p-2">
                <a class="d-inline-block w-100 color-400" href="#" data-bs-toggle="modal" data-bs-target="#MynotesModal" title="My notes">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                        <path class="fill-secondary" d="M1.5 0A1.5 1.5 0 0 0 0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1H1.5z" />
                        <path d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zM3 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5V9h-4.5A1.5 1.5 0 0 0 9 10.5V15H3.5a.5.5 0 0 1-.5-.5v-11zm7 11.293V10.5a.5.5 0 0 1 .5-.5h4.293L10 14.793z" />
                    </svg>
                </a>
            </li>
            <li class="nav-item flex-fill p-2">
                <a class="d-inline-block w-100 color-400" href="#" data-bs-toggle="modal" data-bs-target="#RecentChat">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path class="fill-secondary" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </a>
            </li>
            <li class="nav-item flex-fill p-2">
                <a class="d-inline-block w-100 color-400" href="../auth-signin.html" title="sign-out">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M7.5 1v7h1V1h-1z" />
                        <path class="fill-secondary" d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z" />
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</div>
