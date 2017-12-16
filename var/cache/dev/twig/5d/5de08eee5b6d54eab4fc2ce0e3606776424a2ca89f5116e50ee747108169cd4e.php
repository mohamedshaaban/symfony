<?php

/* SyliusResourceBundle:Macros:notification.html.twig */
class __TwigTemplate_825de13f067975c79b8011185ac18e6a8c5bf1ab9378d3073b41cd2003fbec4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae4926e086b1ac982a70e1d79ad59a3f10112de2d54a6dccceae80550144d265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae4926e086b1ac982a70e1d79ad59a3f10112de2d54a6dccceae80550144d265->enter($__internal_ae4926e086b1ac982a70e1d79ad59a3f10112de2d54a6dccceae80550144d265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle:Macros:notification.html.twig"));

        $__internal_e8b702a986a8bc7aa045a34c151e3e28f5fe381b2384c0da4a7c8ae9e87f78ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b702a986a8bc7aa045a34c151e3e28f5fe381b2384c0da4a7c8ae9e87f78ed->enter($__internal_e8b702a986a8bc7aa045a34c151e3e28f5fe381b2384c0da4a7c8ae9e87f78ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle:Macros:notification.html.twig"));

        // line 13
        echo "

";
        // line 41
        echo "
";
        // line 46
        echo "
";
        // line 51
        echo "
";
        // line 56
        echo "
";
        // line 61
        echo "
";
        
        $__internal_ae4926e086b1ac982a70e1d79ad59a3f10112de2d54a6dccceae80550144d265->leave($__internal_ae4926e086b1ac982a70e1d79ad59a3f10112de2d54a6dccceae80550144d265_prof);

        
        $__internal_e8b702a986a8bc7aa045a34c151e3e28f5fe381b2384c0da4a7c8ae9e87f78ed->leave($__internal_e8b702a986a8bc7aa045a34c151e3e28f5fe381b2384c0da4a7c8ae9e87f78ed_prof);

    }

    // line 2
    public function macro_flashes(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_7033dd6074bad1112acb75bf7e52ac8147adcdbba95b60e2a7f70651da49422f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_7033dd6074bad1112acb75bf7e52ac8147adcdbba95b60e2a7f70651da49422f->enter($__internal_7033dd6074bad1112acb75bf7e52ac8147adcdbba95b60e2a7f70651da49422f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "flashes"));

            $__internal_ab0fcf067e440d91f8127772896fc5ae9c2582985a90f8094abcd38144f687e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_ab0fcf067e440d91f8127772896fc5ae9c2582985a90f8094abcd38144f687e0->enter($__internal_ab0fcf067e440d91f8127772896fc5ae9c2582985a90f8094abcd38144f687e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "flashes"));

            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "all", array()));
            foreach ($context['_seq'] as $context["type"] => $context["flashes"]) {
                // line 4
                echo "        <div id=\"flashesMessage\" class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
            <ul class=\"list-unstyled\">
                ";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["flashes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                    // line 7
                    echo "                    <li>";
                    echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "            </ul>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_ab0fcf067e440d91f8127772896fc5ae9c2582985a90f8094abcd38144f687e0->leave($__internal_ab0fcf067e440d91f8127772896fc5ae9c2582985a90f8094abcd38144f687e0_prof);

            
            $__internal_7033dd6074bad1112acb75bf7e52ac8147adcdbba95b60e2a7f70651da49422f->leave($__internal_7033dd6074bad1112acb75bf7e52ac8147adcdbba95b60e2a7f70651da49422f_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 20
    public function macro_alert($__text__ = null, $__type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a431f4ccd2cd977e771cdc2d9f471dc917dccd2741d211c622847e75871d7193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_a431f4ccd2cd977e771cdc2d9f471dc917dccd2741d211c622847e75871d7193->enter($__internal_a431f4ccd2cd977e771cdc2d9f471dc917dccd2741d211c622847e75871d7193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "alert"));

            $__internal_e3dfc1214b9731010f8fe817bb0cc3b9dda920c51dc504b00ee60063ef05587a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_e3dfc1214b9731010f8fe817bb0cc3b9dda920c51dc504b00ee60063ef05587a->enter($__internal_e3dfc1214b9731010f8fe817bb0cc3b9dda920c51dc504b00ee60063ef05587a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "alert"));

            // line 21
            echo "    ";
            $context["type"] = ("alert-" . ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 21, $this->getSourceContext()); })()), "info")) : ("info")));
            // line 22
            echo "
    ";
            // line 23
            if (((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 23, $this->getSourceContext()); })()))) : (""))) {
                // line 24
                echo "    <div class=\"alert ";
                echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 24, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
        ";
                // line 25
                if (twig_test_iterable((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 25, $this->getSourceContext()); })()))) {
                    // line 26
                    echo "            <ul class=\"form-type-errors list-unstyled\">
                ";
                    // line 27
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 27, $this->getSourceContext()); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                        // line 28
                        echo "                    <li>
                        <p class=\"text-";
                        // line 29
                        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 29, $this->getSourceContext()); })()), "html", null, true);
                        echo "\">
                            ";
                        // line 30
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["line"], "message", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["line"], "messageParameters", array())), "html", null, true);
                        echo "
                        </p>
                    </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 34
                    echo "            </ul>
        ";
                } else {
                    // line 36
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 36, $this->getSourceContext()); })())), "html", null, true);
                    echo "
        ";
                }
                // line 38
                echo "    </div>
    ";
            }
            
            $__internal_e3dfc1214b9731010f8fe817bb0cc3b9dda920c51dc504b00ee60063ef05587a->leave($__internal_e3dfc1214b9731010f8fe817bb0cc3b9dda920c51dc504b00ee60063ef05587a_prof);

            
            $__internal_a431f4ccd2cd977e771cdc2d9f471dc917dccd2741d211c622847e75871d7193->leave($__internal_a431f4ccd2cd977e771cdc2d9f471dc917dccd2741d211c622847e75871d7193_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 42
    public function macro_danger($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_308d8a0a98d68590aac0a3cd1c2351c97dacc7318d7db9e32e404cf3bec52f98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_308d8a0a98d68590aac0a3cd1c2351c97dacc7318d7db9e32e404cf3bec52f98->enter($__internal_308d8a0a98d68590aac0a3cd1c2351c97dacc7318d7db9e32e404cf3bec52f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "danger"));

            $__internal_e33d0e6281c0f7e86d31dad8afe50a3387c768b7266382bd7f336f9f3e389c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_e33d0e6281c0f7e86d31dad8afe50a3387c768b7266382bd7f336f9f3e389c2c->enter($__internal_e33d0e6281c0f7e86d31dad8afe50a3387c768b7266382bd7f336f9f3e389c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "danger"));

            // line 43
            echo "    ";
            $context["__internal_5def8d7be0686cc595574b18e49967633e03f9bd3ac15cee54ff3af7e2d0ec4f"] = $this;
            // line 44
            echo "    ";
            echo $context["__internal_5def8d7be0686cc595574b18e49967633e03f9bd3ac15cee54ff3af7e2d0ec4f"]->macro_alert((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 44, $this->getSourceContext()); })()), "danger");
            echo "
";
            
            $__internal_e33d0e6281c0f7e86d31dad8afe50a3387c768b7266382bd7f336f9f3e389c2c->leave($__internal_e33d0e6281c0f7e86d31dad8afe50a3387c768b7266382bd7f336f9f3e389c2c_prof);

            
            $__internal_308d8a0a98d68590aac0a3cd1c2351c97dacc7318d7db9e32e404cf3bec52f98->leave($__internal_308d8a0a98d68590aac0a3cd1c2351c97dacc7318d7db9e32e404cf3bec52f98_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 47
    public function macro_error($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_1fce4315ae06f2a800b7fa28bb436c24354972f9d47aa787b832994920cb9918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_1fce4315ae06f2a800b7fa28bb436c24354972f9d47aa787b832994920cb9918->enter($__internal_1fce4315ae06f2a800b7fa28bb436c24354972f9d47aa787b832994920cb9918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "error"));

            $__internal_baa3b79657e0c14f6c594435c55c44716017e249e7fd638df1aad4a2f7f93c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_baa3b79657e0c14f6c594435c55c44716017e249e7fd638df1aad4a2f7f93c7f->enter($__internal_baa3b79657e0c14f6c594435c55c44716017e249e7fd638df1aad4a2f7f93c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "error"));

            // line 48
            echo "    ";
            $context["__internal_6934b80909479acd646e2d9d90e0e0c7e3f5e4148a3166d3bf4af31f81ef19b0"] = $this;
            // line 49
            echo "    ";
            echo $context["__internal_6934b80909479acd646e2d9d90e0e0c7e3f5e4148a3166d3bf4af31f81ef19b0"]->macro_danger((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 49, $this->getSourceContext()); })()));
            echo "
";
            
            $__internal_baa3b79657e0c14f6c594435c55c44716017e249e7fd638df1aad4a2f7f93c7f->leave($__internal_baa3b79657e0c14f6c594435c55c44716017e249e7fd638df1aad4a2f7f93c7f_prof);

            
            $__internal_1fce4315ae06f2a800b7fa28bb436c24354972f9d47aa787b832994920cb9918->leave($__internal_1fce4315ae06f2a800b7fa28bb436c24354972f9d47aa787b832994920cb9918_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 52
    public function macro_warning($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_7880bf367735c8618631f0a059895dd5760f6f7b5cb03d51daba440794c98b12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_7880bf367735c8618631f0a059895dd5760f6f7b5cb03d51daba440794c98b12->enter($__internal_7880bf367735c8618631f0a059895dd5760f6f7b5cb03d51daba440794c98b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "warning"));

            $__internal_37feb1637261c1ce023fae70060bc88301706dca927014d068fffa13c53adc0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_37feb1637261c1ce023fae70060bc88301706dca927014d068fffa13c53adc0b->enter($__internal_37feb1637261c1ce023fae70060bc88301706dca927014d068fffa13c53adc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "warning"));

            // line 53
            echo "    ";
            $context["__internal_32cd2be7aad3817d7372a9d556f3ddfcb52d54b70b4231f92052da011baa8c4e"] = $this;
            // line 54
            echo "    ";
            echo $context["__internal_32cd2be7aad3817d7372a9d556f3ddfcb52d54b70b4231f92052da011baa8c4e"]->macro_alert((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 54, $this->getSourceContext()); })()), "warning");
            echo "
";
            
            $__internal_37feb1637261c1ce023fae70060bc88301706dca927014d068fffa13c53adc0b->leave($__internal_37feb1637261c1ce023fae70060bc88301706dca927014d068fffa13c53adc0b_prof);

            
            $__internal_7880bf367735c8618631f0a059895dd5760f6f7b5cb03d51daba440794c98b12->leave($__internal_7880bf367735c8618631f0a059895dd5760f6f7b5cb03d51daba440794c98b12_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 57
    public function macro_success($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_69ea9d9506175349f0bf47cd381f506fd7986ecf4338150f21939d606971106a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_69ea9d9506175349f0bf47cd381f506fd7986ecf4338150f21939d606971106a->enter($__internal_69ea9d9506175349f0bf47cd381f506fd7986ecf4338150f21939d606971106a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "success"));

            $__internal_feacd7bf4c6b71305b1cc337b071daf450bd0488d7a4d7c8d046b3a9b96af60b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_feacd7bf4c6b71305b1cc337b071daf450bd0488d7a4d7c8d046b3a9b96af60b->enter($__internal_feacd7bf4c6b71305b1cc337b071daf450bd0488d7a4d7c8d046b3a9b96af60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "success"));

            // line 58
            echo "    ";
            $context["__internal_5e350170e323045200e33a390e619868d0be0136289912a52cb98ede61654900"] = $this;
            // line 59
            echo "    ";
            echo $context["__internal_5e350170e323045200e33a390e619868d0be0136289912a52cb98ede61654900"]->macro_alert((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 59, $this->getSourceContext()); })()), "success");
            echo "
";
            
            $__internal_feacd7bf4c6b71305b1cc337b071daf450bd0488d7a4d7c8d046b3a9b96af60b->leave($__internal_feacd7bf4c6b71305b1cc337b071daf450bd0488d7a4d7c8d046b3a9b96af60b_prof);

            
            $__internal_69ea9d9506175349f0bf47cd381f506fd7986ecf4338150f21939d606971106a->leave($__internal_69ea9d9506175349f0bf47cd381f506fd7986ecf4338150f21939d606971106a_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 62
    public function macro_info($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_ef8193f187a20fcd5079d4fed517d5f5c11fab3aa423389283bf6a205eb350c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_ef8193f187a20fcd5079d4fed517d5f5c11fab3aa423389283bf6a205eb350c4->enter($__internal_ef8193f187a20fcd5079d4fed517d5f5c11fab3aa423389283bf6a205eb350c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "info"));

            $__internal_0473389494a909981773405b124eb0ac455e29f67e102ca2b68cd71c3daa9b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_0473389494a909981773405b124eb0ac455e29f67e102ca2b68cd71c3daa9b4e->enter($__internal_0473389494a909981773405b124eb0ac455e29f67e102ca2b68cd71c3daa9b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "info"));

            // line 63
            echo "    ";
            $context["__internal_417ef54c26dbadbd684b35d44ba2a8b72e930ed38669ae3a65092aaaf367237d"] = $this;
            // line 64
            echo "    ";
            echo $context["__internal_417ef54c26dbadbd684b35d44ba2a8b72e930ed38669ae3a65092aaaf367237d"]->macro_alert((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 64, $this->getSourceContext()); })()), "info");
            echo "
";
            
            $__internal_0473389494a909981773405b124eb0ac455e29f67e102ca2b68cd71c3daa9b4e->leave($__internal_0473389494a909981773405b124eb0ac455e29f67e102ca2b68cd71c3daa9b4e_prof);

            
            $__internal_ef8193f187a20fcd5079d4fed517d5f5c11fab3aa423389283bf6a205eb350c4->leave($__internal_ef8193f187a20fcd5079d4fed517d5f5c11fab3aa423389283bf6a205eb350c4_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusResourceBundle:Macros:notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 64,  373 => 63,  355 => 62,  337 => 59,  334 => 58,  316 => 57,  298 => 54,  295 => 53,  277 => 52,  259 => 49,  256 => 48,  238 => 47,  220 => 44,  217 => 43,  199 => 42,  182 => 38,  176 => 36,  172 => 34,  162 => 30,  158 => 29,  155 => 28,  151 => 27,  148 => 26,  146 => 25,  141 => 24,  139 => 23,  136 => 22,  133 => 21,  114 => 20,  93 => 9,  84 => 7,  80 => 6,  74 => 4,  69 => 3,  52 => 2,  41 => 61,  38 => 56,  35 => 51,  32 => 46,  29 => 41,  25 => 13,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Display all the flashes messages #}
{% macro flashes() %}
    {% for type, flashes in app.session.flashBag.all %}
        <div id=\"flashesMessage\" class=\"alert alert-{{ type }}\">
            <ul class=\"list-unstyled\">
                {% for flash in flashes %}
                    <li>{{ flash }}</li>
                {% endfor %}
            </ul>
        </div>
    {% endfor %}
{% endmacro %}


{#
    Display a bootstrap alert :
    - text : Message to print (string or array)
    - type : danger | warning | success | info (Default : info)
#}
{% macro alert(text, type) %}
    {% set type = 'alert-' ~ type|default('info') %}

    {% if text|default %}
    <div class=\"alert {{ type }}\">
        {% if text is iterable %}
            <ul class=\"form-type-errors list-unstyled\">
                {% for line in text %}
                    <li>
                        <p class=\"text-{{ type }}\">
                            {{ line.message|trans(line.messageParameters) }}
                        </p>
                    </li>
                {% endfor %}
            </ul>
        {% else %}
            {{ text|trans }}
        {% endif %}
    </div>
    {% endif %}
{% endmacro %}

{% macro danger(text) %}
    {% from _self import alert %}
    {{ alert(text, 'danger') }}
{% endmacro %}

{% macro error(text) %}
    {% from _self import danger %}
    {{ danger(text) }}
{% endmacro %}

{% macro warning(text) %}
    {% from _self import alert %}
    {{ alert(text, 'warning') }}
{% endmacro %}

{% macro success(text) %}
    {% from _self import alert %}
    {{ alert(text, 'success') }}
{% endmacro %}

{% macro info(text) %}
    {% from _self import alert %}
    {{ alert(text, 'info') }}
{% endmacro %}
", "SyliusResourceBundle:Macros:notification.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/views/Macros/notification.html.twig");
    }
}
