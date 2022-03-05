@extends('layouts.master')
@section('title','FAQ')
@section('content')
    <section class="faq-container">
        <!-- Start Page Banner -->
        <div class="page-banner-area item-bg3">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>FAQ</h2>
                            <ul>
                                <li>
                                    <a href="{{ route('home-page') }}">Home</a>
                                </li>
                                <li>FAQ</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start FAQ Area -->
        <section class="faq-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Asked Questions</h2>
                    <p>Ready answers to some frequently asked questions.</p>
                </div>

                <div class="faq-accordion">
                    <ul class="accordion">
                        <li class="accordion-item">
                            <a class="accordion-title active" href="javascript:void(0)">
                                <i class='bx bx-plus'></i>
                                1 - What is organic farming and why is it important?
                            </a>

                            <p class="accordion-content show">
                                Organic farming is agriculture that makes healthy food, healthy soils, healthy plants, and healthy environments a priority, along with crop productivity. Organic farmers use biological fertilizer inputs and management practices such as cover cropping and crop rotation to improve soil quality and build organic soil matter. By increasing the amount of organic matter in the soil, organic farmers enhance the soil’s ability to absorb water, reducing the impacts of drought and flooding. Improving soil organic matter also helps it to absorb and store carbon and other nutrients need to grow healthy crops, which, in turn, are better able to resist insects and diseases.<br/>
                                Organic production systems do not use genetically modified (GM) seed, synthetic pesticides or fertilizers. Some of the essential characteristics of organic systems include design and implementation of an organic system plan that describes the practices used in producing crops and livestock products; a detailed recordkeeping system that tracks all products from the field to point of sale; and maintenance of buffer zones to prevent inadvertent contamination by synthetic farm chemicals from adjacent conventional fields.
                            </p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class='bx bx-plus'></i>
                                2 - What does certified organic mean and how is certification regulated?
                            </a>

                            <p class="accordion-content">
                                The National Organic Program (NOP) develops the rules and regulations for the production, handling, labeling, and enforcement of all USDA organic products. This process, referred to as rulemaking, involves input from the National Organic Standards Board (a Federal Advisory Committee made up of fifteen members of the public) and the public.<br/>
                                The national standard states that organic food must be produced without the use of conventional pesticides, petroleum-based fertilizers, sewage-sludge-based fertilizers, herbicides, genetic enginerring (biotechnology), antibiotics, growth hormones, or irradiation. Animals raised on an organic operation must meet animal health welfare standards, not be fed antibiotics or growth hormones, be fed 100% organic feed, and must be provided access to the outdoors.* Land must have no prohibited substances applied to it for at least three years before the harvest of an organic crop. The NOP states that all farms, ranches, and handling operations that display the “USDA Organic” seal must be certified organic by the state or by a private agency, accredited by the USDA, to ensure the NOP standards are followed.<br/>
                                To gain organic certification, a farmer (of cropland, pasture or livestock) submits an organic system plan to an accredited certifier each year. This documents how the farmer adheres to NOP standards. Certified organic farms and processing facilities undergo annual inspections to verify that they are meeting the standards. Organic inspectors examine all elements of a farm operation for adherence to the standards and verfiy that the farm is being managed according to the farmer’s organic system plan.
                            </p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class='bx bx-plus'></i>
                                3 - Can GMOs be used in organic products?
                            </a>

                            <p class="accordion-content">
                                The use of genetic engineering, or genetically modified organisms (GMOs) is prohibited in organic products. This means an organic farmer can’t plant GMO seeds, an organic cow can’t eat GMO alfalfa or corn, and an organic soup producer can’t use any GMO ingredients. To meet the USDA organic regulations, farmers and processors must show they aren’t using GMOs and that they are protecting their products from contact with prohibited substances from farm to table.
                            </p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class='bx bx-plus'></i>
                                4 - How does organic farming help the environment?                            </a>

                            <p class="accordion-content">
                                Organic farms use production practices with environmental benefits such as water management practices, no-till or minimum tillage, habitat maintenance for beneficial insects and vertebrates, and biological pest control. These ecologically protective practices contribute to enhanced ecosystem services and benefit water quality, soil health, and biodiversity.<br/>
                                Conventional farming typically uses minimal crop rotations, growing the same single crop year after year on the same land. This practice, known as mono cropping causes the depletion of nutrients and minerals. In order to continue growing crops in this depleted soil, nutrients and minerals must be added back in the form of hydrocarbon based fertilizers and mined minerals such as phosphate. Conventional GM farming is dependent on earth-based non-renewable resources. Monocultures and the resulting poor health open the way for infestations of insects, diseases and weeds. Healthy bio-diverse soil keeps these infestations in check. The lack of biodiversity requires synthetic pesticides and herbicides to be used, further destroying the national soil biology.
                            </p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class='bx bx-plus'></i>
                                5 - How does organic farming improve soil and water quality?
                            </a>

                            <p class="accordion-content">
                                Using biological forms of fertilizer such as compost, animal manures, and legume cover crops, builds soil organic matter, even when routine tillage is used for weed control. Building soil organic matter increases soil water retention and nurtures more active soil microbial communities that retain nitrogen in the soil longer and transform it into non-leachable gaseous forms. There is a small but telling body of research in the US that suggests that improved soil quality influences the ability of crops to withstand or repel insect attack and plant disease.<br/>
                                Organic biological fertilizer sources release their nutrients slowly over time, providing more opportunity for the nitrogen to be digested by soil organisms and taken up by crops before leaching below the root zone. Increased soil organic matter in the soil leads to tighter nutrient cycling and greater water holding capability in organically managed soils, with the result that nitrate leaching from groundwater is about half that of conventionally farmed soils. Recent data from a 12-year study shows that fields under organic management had half the annual nitrate leaching losses than fields under conventional management.
                            </p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class='bx bx-plus'></i>
                                6 - Are organic yields lower?                            </a>

                            <p class="accordion-content">
                                Farm data from USDA producer surveys show organic crop yields may be lower than those of conventional production. The yield differences estimated from USDA farm data are similar to those estimated by comparing USDA’s 2011 Certified Organic Production Survey with USDA’s 2011 Crop Production Report. The yield differences revealed by survey data may be due to the unique problems encountered by organic systems outside of the experimental setting, such as effective weed control.<br/>
                                However, while organic agriculture may produce lower yields when compared to conventional agriculture, organic farming is often more profitable, delivers more environmental benefits, and is healthier in terms of increased nutritional benefits and reduced dietary pesticide exposure.
                            </p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class='bx bx-plus'></i>
                                7 - Why is it important to invest in organic research?
                            </a>

                            <p class="accordion-content">
                                Public funding such as USDA’s Organic Agriculture Research and Extension Initiative (OREI) and private funding from organizations such as OFRF, is critical to training the next generation of scientists and developing new talent. Research delivers valuable information, tools, and resources that help all farmers—both organic and non-organic—increase the environmental and economic sustainability of their operations. The continued growth of organic agriculture requires investment in research, education, and extension programs that provide sound information and assistance to America’s farmers. The results from OFRF’s evaluation of USDA research and 2016 National Organic Research Agenda provide a thorough analysis of organic research to date and current priorities for research based on a national survey of organic farmers.
                            </p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class='bx bx-plus'></i>
                                8 - Why does organic cost more?                            </a>

                            <p class="accordion-content">
                                The cost of organic food is higher than that of conventional food because the organic price tag more closely reflects the true cost of growing the food: substituting labor and intensive management for chemicals. These costs may include cleanup of polluted water and remediation of pesticide contamination.
                            </p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class='bx bx-plus'></i>
                                9 - How does organic farming help mitigate climate change?                           </a>

                            <p class="accordion-content">
                                Climate change poses critical risks for farmers and ranchers and endangers the soil, water, and other resources on which food production depends. Rising temperatures have already intensified droughts, heat waves, and storms, making it harder to grow crops and raise livestock.<br/>
                                The good news is that organic systems that emphasize soil health help farmers and ranchers increase resilience to the impacts of climate change. There is also extensive research demonstrating the potential of organic systems to reduce agriculture’s contribution to climate change (i.e., mitigate climate change).<br/>
                                Organic systems do this by capturing and storing more carbon (CO2) in the soil (carbon sequestration).<br/>
                                While organic systems require some level of physical disturbance to control weeds, they eliminate synthetic inputs and can significantly reduce tillage. Reduced tillage, crop diversification, cover cropping, organic amendments, and sound nutrient management can enhance carbon sequestration and build climate resiliency in organic agricultural systems.<br/>
                                They also release fewer greenhouse gases.<br/>
                                Organic farmers do not use synthetic pesticides and fertilizers, one of the primary contributors of greenhouse gases. Healthy soils help crops obtain nitrogen, phosphorus, and other nutrients from organic soil organic matter. This reduces the need for fertilizers that can threaten water quality and minimizes the release of greenhouse gases from soils.
                            </p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class='bx bx-plus'></i>
                                10 - How does organic farming increase resilience to climate change?                            </a>

                            <p class="accordion-content">
                                Healthy soils form the foundation of organic production. Healthy soils have good structure (tilth), which allows them to absorb and hold moisture, drain well, maintain adequate aeration, and foster deep, healthy crop root systems. Such soils sustain crops through dry spells, require less irrigation water, and undergo less ponding, runoff, and erosion during heavy rains.<br/>
                                The Natural Resources Conservation Service (NRCS) has identified four guiding principles that support healthy soils: 1) minimize disturbance, 2) maximize biodiversity, 3) keep soil covered, and 4) maintain living roots. These principles provide the foundation for a resilient farm system.<br/>
                                The USDA National Organic Standards require certified producers to implement crop rotation, cover cropping, tillage, nutrient management, and other practices that improve and maintain the physical, chemical, and biological condition of the soil.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End FAQ Area -->

        <!-- Start FAQ Contact Area -->
        <div class="faq-contact-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Do You Have Any Questions?</h2>
                    <p>Fill in the information, write a question and send it to us.</p>
                </div>

                <div class="faq-contact-form">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Address">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="send-btn">
                                    <button type="submit" class="default-btn">
                                        Send Message
                                    </button>
                                </div>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End FAQ Contact Area -->
    </section>
@endsection
@section('script-tag')
    <script></script>
@endsection
