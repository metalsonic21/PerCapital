<template>
<div id="faq" class="gray-section animated fadeInRight faq-mine">
    <b-container>
        <div class="row">
            <div class="col-lg-12">
                <div>

                    <div class="row faq-item-mine">
                        <div class="col-lg-12 text-center">
                            <div class="navy-line"></div>
                            <h1 align="center" class="title-mine section-title-per">FAQ</h1>
                            <small align="center">Click on a question to visualize the answer</small>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="row">
                            <div class="col-md-7">
                                <b-link v-b-toggle.faq-1 class="faq-question">What is an Asset Management Company?</b-link>
                            </div>
                            <div class="col-md-3 offset-md-2">
                                <div class="tag-list">
                                    <span class="tag-item">Services</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <b-collapse id="faq-1" class="panel-collapse">
                                    <div class="faq-answer">
                                        <p>They are companies authorized by SUNAVAL that are intended to administer the assets of collective investment entities, whatever their type, and represent them in accordance with the terms of the administration contract signed for this purpose.</p>
                                        <br>
                                        <p><strong>Characteristics</strong> </p>
                                        <p>
                                            <ul>
                                                <li>They cannot administer to two E.I.C. equals</li>
                                                <li>Invest resources in the name and on behalf of the E.I.C.</li>
                                                <li>They charge commissions for services rendered and are set by mutual agreement with E.I.C.</li>
                                                <li>Keep separate accounts of the E.I.C.</li>
                                                <li>They keep accounting of the E.I.C.</li>
                                                <li>Inform quarterly investors of the E.I.C. (state and market behavior)</li>
                                                <li>Reflect on the profitability of the E.I.C. that manage profitability less expenses and remunerations / commissions.</li>
                                            </ul>
                                        </p>

                                        <p> <strong>They cannot:</strong> </p>
                                        <p>
                                            <ul>
                                                <li>Guarantee specific results or yields</li>
                                                <li>Give or borrow money from the E.I.C</li>
                                                <li>Maintain custody of bearer securities of the E.I.C.</li>
                                                <li>Grant personal or real guarantees to secure obligations to third parties</li>
                                            </ul>
                                        </p>

                                        <p> <strong>They must</strong> </p>
                                        <p>
                                            <ul>
                                                <li>Distribute UDI of the E.I.C. </li>
                                                <li>Invest resources in the name and account of the E.I.C.</li>
                                                <li>Maintain continuous evaluation of the values of the E.I.C.</li>
                                                <li>Ensure that the E.I.C. have cash flow to answer obligations and expenses</li>
                                                <li>Coordinate legal, accounting and distribution services of the E.I.C.</li>
                                                <li>Prepare prospects, reports and related reports for investors and SUNAVAL</li>
                                                <li>Control transfer agent service and provide information to custodian agent for transfer of securities or cash.</li>
                                                <li>Legally represent the E.I.C.</li>
                                                <li>Buy IU</li>
                                                <li>Calculate daily the value of the net amount of mutual funds and their IU</li>
                                                <li>Keep track of investors and their operations</li>

                                            </ul>

                                        </p>

                                        <p> <strong>They can:</strong> </p>
                                        <p>
                                            <ul>
                                                <li>Withdraw funds from the E.I.C. and its Management Company to pay expenses, repurchase and payment of dividends.</li>
                                                <li>Act as Investment Advisors, Transfer Agents.</li>
                                            </ul>
                                        </p>
                                    </div>
                                </b-collapse>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="row">
                            <div class="col-md-7">
                                <b-link v-b-toggle.faq-2 class="faq-question">What is an E.I.C.(Funds)?</b-link>
                            </div>
                            <div class="col-md-3 offset-md-2">
                                <div class="tag-list">
                                    <span class="tag-item">Services</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <b-collapse id="faq-2" class="panel-collapse">
                                    <div class="faq-answer">
                                        <p>They are entities authorized by SUNAVAL that channel the contributions of investors destined to constitute a common capital, integrated by a portfolio of securities or other assets.
                                        </p>

                                        <p>They can constitute equity through trust.
                                        </p>
                                        <p>Investors are natural or legal persons with Investment Units.
                                        </p>
                                        <p>
                                            Investment Units are shares, or other instruments issued by the E.I.C.
                                        </p>

                                        <p> <strong>Characteristics</strong> </p>
                                        <p>
                                            <ul>
                                                <li>Establish Investment Policy</li>
                                                <li>Define Utility Distribution Policy (capitalize or pay)</li>
                                                <li>Have an investment committee appointed by the entity or by the asset management company.</li>
                                                <li>Investment Committee makes investment decisions</li>
                                                <li>Members of the Investment Committee may be appointed by E.I.C. or by Asset Management Company</li>
                                                <li>They must hold an assembly of investors.</li>
                                                <li>Investors can be represented by power of attorney expressing powers granted.</li>
                                            </ul>
                                        </p>
                                    </div>
                                </b-collapse>

                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="row">
                            <div class="col-md-7">
                                <b-link v-b-toggle.faq-3 class="faq-question">What is an Open Capital Mutual Fund?</b-link>
                            </div>
                            <div class="col-md-3 offset-md-2">
                                <div class="tag-list">
                                    <span class="tag-item">Funds</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <b-collapse id="faq-3" class="panel-collapse">
                                    <div class="faq-answer">
                                        <p>
                                            It is an E.I.C. which aims at investing in securities, according to the principle of risk distribution.
                                        </p>

                                        <p> <strong>Characteristics</strong> </p>

                                        <p>
                                            <ul>
                                                <li>IU not transferable or registered on the stock exchange (may issue fractions of UDI)</li>
                                                <li>It can increase capital or equity by the contribution of investors or it can decrease equity or capital by withdrawal of investors, without the need for an assembly of investors.</li>
                                                <li>You must distribute the total returns net to investors (in cash or by capitalizing)</li>
                                            </ul>
                                        </p>

                                        <p> <strong>They can invest in securities: </strong> </p>
                                        <p>
                                            <ul>
                                                <li>Whose public offer has been authorized by the National Securities Commission</li>
                                                <li>Those registered in the stock exchanges</li>
                                                <li>Those that have been issued or endorsed by the Republic or other public law institutions</li>
                                                <li>That they have been issued in accordance with the Law of the Central Bank of Venezuela</li>
                                                <li>Those that have been issued by institutions governed by the General Law of Banks and other Financial Institutions</li>
                                                <li>Those issued according to the Law of the National Savings and Loan System.</li>
                                              </ul>
                                        </p>

                                        <p>The net enrichments obtained by collective investment entities and the tax caused in accordance with the provisions of the Corporate Asset Tax Law are exempt from income tax.</p>
                                    </div>
                                </b-collapse>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="row">
                            <div class="col-md-7">
                                <b-link v-b-toggle.faq-4 class="faq-question">What is a Real Estate Fund?</b-link>
                            </div>
                            <div class="col-md-3 offset-md-2">
                                <div class="tag-list">
                                    <span class="tag-item">Funds</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <b-collapse id="faq-4" class="panel-collapse">
                                    <div class="faq-answer">
                                        <p>They are those whose object is channeling of resources towards real estate and real estate projects.</p>
                                    </div>
                                </b-collapse>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="row">
                            <div class="col-md-7">
                                <b-link v-b-toggle.faq-5 class="faq-question">Why should I invest in PER CAPITAL?</b-link>

                            </div>
                            <div class="col-md-3 offset-md-2">
                                <div class="tag-list">
                                    <span class="tag-item">General</span>
                                    <span class="tag-item">Services</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">

                                <b-collapse id="faq-5" class="panel-collapse">
                                    <div class="faq-answer">
                                        <p>
                                            <ul>
                                                <li>Access to investment opportunities that were previously only for qualified investors with high assets.</li>
                                                <li>Benefit from the experience and knowledge of our analysts and team of experts.</li>
                                                <li>You can start your investment with the minimum required.</li>
                                                <li>All incomes from investments in E.I.C. are tax free.</li>
                                                <li>Investments in E.I.C. offer more legal security over other direct investments like buying properties or companies.</li>
                                            </ul>
                                        </p>
                                    </div>
                                </b-collapse>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="row">
                            <div class="col-md-7">
                                <b-link v-b-toggle.faq-6 class="faq-question">What are the risks?</b-link>

                            </div>
                            <div class="col-md-3 offset-md-2">
                                <div class="tag-list">
                                    <span class="tag-item">General</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <b-collapse id="faq-6" class="panel-collapse">
                                    <div class="faq-answer">
                                        <p>
                                            Any investment carries risks associated with the market in which it develops. This is due to fluctuations in the market, variables that cannot be controlled or failures in the fulfillment of business plans.
                                        </p>
                                        <p>
                                            PER CAPITAL evaluates in advance the possible scenarios to try to mitigate as many risks as possible and thus avoid
                                        </p>
                                        <p>
                                            However, the risks may exceed the contingency measures taken and the loss of capital is likely.
                                        </p>
                                    </div>
                                </b-collapse>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="row">
                            <div class="col-md-7">
                                <b-link v-b-toggle.faq-7 class="faq-question">What is the ideal investment for me?</b-link>

                            </div>
                            <div class="col-md-3 offset-md-2">
                                <div class="tag-list">
                                    <span class="tag-item">General</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <b-collapse id="faq-7" class="panel-collapse">
                                    <div class="faq-answer">
                                        <p>
                                            Investors can choose from the PER CAPITAL product portfolio the fund or investment that best suits their financial goals. In addition, PER CAPITAL has the service of its experts to guide you in the product that best suits your investment objectives.
                                        </p>
                                    </div>
                                </b-collapse>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="row">
                            <div class="col-md-7">
                                <b-link v-b-toggle.faq-8 class="faq-question">What is the minimum investment?</b-link>

                            </div>
                            <div class="col-md-3 offset-md-2">
                                <div class="tag-list">
                                    <span class="tag-item">General</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">

                                <b-collapse id="faq-8" class="panel-collapse">
                                    <div class="faq-answer">
                                        <p>
                                            The minimum investment will depend on the Fund chosen by the client.
                                        </p>
                                    </div>
                                </b-collapse>

                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="row">
                            <div class="col-md-7">
                                <b-link v-b-toggle.faq-9 class="faq-question">What are the commissions?</b-link>

                            </div>
                            <div class="col-md-3 offset-md-2">
                                <div class="tag-list">
                                    <span class="tag-item">General</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <b-collapse id="faq-9" class="panel-collapse">
                                    <div class="faq-answer">
                                        <p>
                                            <strong>Investors:</strong>
                                            <ul>
                                                <li>Entry Fee 2.5% when subscribing</li>
                                                <li>Exit Commission 0.0%</li>
                                            </ul>
                                        </p>

                                        <p>
                                            <strong>E.I.C.</strong>
                                            <ul>
                                                <li>Mutual Fund Administration Commission, max 5% of the average value of net assets at closing.</li>
                                                <li>Administration Commission E.I.C. Real estate max 5% of the average value of net assets at closing</li>
                                                <li>Administration Commission E.I.C. Venture Capital max 10% of the average value of net assets at closing</li>
                                            </ul>
                                        </p>
                                    </div>
                                </b-collapse>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="row">
                            <div class="col-md-7">
                                <b-link v-b-toggle.faq-10 class="faq-question">Once placed my investment how can I see it?</b-link>

                            </div>
                            <div class="col-md-3 offset-md-2">
                                <div class="tag-list">
                                    <span class="tag-item">General</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <b-collapse id="faq-10" class="panel-collapse">
                                    <div class="faq-answer">
                                        <p>
                                            The client will obtain a certificate for their Investment Units and can see the detail through our website.
                                        </p>
                                    </div>
                                </b-collapse>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="row">
                            <div class="col-md-7">
                                <b-link v-b-toggle.faq-11 class="faq-question">What requirements should I submit if I am a foreign investor (non-resident)?</b-link>

                            </div>
                            <div class="col-md-3 offset-md-2">
                                <div class="tag-list">
                                    <span class="tag-item">General</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <b-collapse id="faq-11" class="panel-collapse">
                                    <div class="faq-answer">
                                        <p>
                                            Every foreign investor, whether a Natural or Legal Person, must request a “Non-Resident RIF” from SENIAT by email <strong>intriint@seniat.gob.ve</strong> and present it additionally to general collections.
                                        </p>
                                    </div>
                                </b-collapse>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </b-container>

</div>
</template>

<script>
export default {

}
</script>

<style>
.faq-item-mine {
    margin-top: -50px;
}

@media (min-width:781px){
.faq-mine{
    margin-bottom:-20px;
}
}

@media (max-width:780px) {
    .faq-mine{
        margin-bottom: 0px;
    }
}
</style>
