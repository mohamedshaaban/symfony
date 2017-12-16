<?php

/* SyliusUiBundle:Macro:buttons.html.twig */
class __TwigTemplate_d646eb32778e5308cfd7ea72c8fd1a0874053d9cb6dd048fe98593543ff592bd extends Twig_Template
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
        $__internal_db50af405197f7cbe152f4353dc185fb666a3d69a9cbe9c1d70eae144e611a6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db50af405197f7cbe152f4353dc185fb666a3d69a9cbe9c1d70eae144e611a6a->enter($__internal_db50af405197f7cbe152f4353dc185fb666a3d69a9cbe9c1d70eae144e611a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:buttons.html.twig"));

        $__internal_ff37d4e92a8e94d29056ec7bd890130cce3939d292f8b6d522c777a2784308a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff37d4e92a8e94d29056ec7bd890130cce3939d292f8b6d522c777a2784308a1->enter($__internal_ff37d4e92a8e94d29056ec7bd890130cce3939d292f8b6d522c777a2784308a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:buttons.html.twig"));

        // line 11
        echo "
";
        // line 21
        echo "
";
        // line 31
        echo "
";
        // line 41
        echo "
";
        // line 47
        echo "
";
        // line 53
        echo "
";
        
        $__internal_db50af405197f7cbe152f4353dc185fb666a3d69a9cbe9c1d70eae144e611a6a->leave($__internal_db50af405197f7cbe152f4353dc185fb666a3d69a9cbe9c1d70eae144e611a6a_prof);

        
        $__internal_ff37d4e92a8e94d29056ec7bd890130cce3939d292f8b6d522c777a2784308a1->leave($__internal_ff37d4e92a8e94d29056ec7bd890130cce3939d292f8b6d522c777a2784308a1_prof);

    }

    // line 1
    public function macro_default($__url__ = null, $__message__ = null, $__id__ = null, $__icon__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "id" => $__id__,
            "icon" => $__icon__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_5d122031f218e3bd9ac49790ba01bd61c3ee1d3bc9992b19387d0d2a76692e14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_5d122031f218e3bd9ac49790ba01bd61c3ee1d3bc9992b19387d0d2a76692e14->enter($__internal_5d122031f218e3bd9ac49790ba01bd61c3ee1d3bc9992b19387d0d2a76692e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

            $__internal_78bbe2ba51d21208be3b30ca966d48e831574b8a6c9380163f918ddf3d7bc1cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_78bbe2ba51d21208be3b30ca966d48e831574b8a6c9380163f918ddf3d7bc1cd->enter($__internal_78bbe2ba51d21208be3b30ca966d48e831574b8a6c9380163f918ddf3d7bc1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

            // line 2
            echo "    <a class=\"ui ";
            if ( !twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 2, $this->getSourceContext()); })()))) {
                echo "labeled ";
            }
            if ( !twig_test_empty((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 2, $this->getSourceContext()); })()))) {
                echo "icon ";
            }
            echo "button ";
            if ( !twig_test_empty((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 2, $this->getSourceContext()); })()))) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
                echo " ";
            }
            echo "\" ";
            if ( !(null === (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 2, $this->getSourceContext()); })()))) {
                echo " id=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
                echo "\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
        ";
            // line 3
            if ( !twig_test_empty((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 3, $this->getSourceContext()); })()))) {
                // line 4
                echo "            <i class=\"icon ";
                echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></i>
        ";
            }
            // line 6
            echo "        ";
            if ( !twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 6, $this->getSourceContext()); })()))) {
                // line 7
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 7, $this->getSourceContext()); })())), "html", null, true);
                echo "
        ";
            }
            // line 9
            echo "    </a>
";
            
            $__internal_78bbe2ba51d21208be3b30ca966d48e831574b8a6c9380163f918ddf3d7bc1cd->leave($__internal_78bbe2ba51d21208be3b30ca966d48e831574b8a6c9380163f918ddf3d7bc1cd_prof);

            
            $__internal_5d122031f218e3bd9ac49790ba01bd61c3ee1d3bc9992b19387d0d2a76692e14->leave($__internal_5d122031f218e3bd9ac49790ba01bd61c3ee1d3bc9992b19387d0d2a76692e14_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 12
    public function macro_show($__url__ = null, $__message__ = null, $__id__ = null, $__class__ = null, $__labeled__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "id" => $__id__,
            "class" => $__class__,
            "labeled" => $__labeled__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b4a286d03722d079ae4ec2e88bc433b1e2c525e6e06762138d16986326a16d04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_b4a286d03722d079ae4ec2e88bc433b1e2c525e6e06762138d16986326a16d04->enter($__internal_b4a286d03722d079ae4ec2e88bc433b1e2c525e6e06762138d16986326a16d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "show"));

            $__internal_96aa1e7b12dcd44389ac05d856c2edcec6773dd85baea4cde64c4e0914b2b245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_96aa1e7b12dcd44389ac05d856c2edcec6773dd85baea4cde64c4e0914b2b245->enter($__internal_96aa1e7b12dcd44389ac05d856c2edcec6773dd85baea4cde64c4e0914b2b245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "show"));

            // line 13
            echo "    ";
            $context["buttons"] = $this;
            // line 14
            echo "
    ";
            // line 15
            if ((twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 15, $this->getSourceContext()); })())) && (isset($context["labeled"]) || array_key_exists("labeled", $context) ? $context["labeled"] : (function () { throw new Twig_Error_Runtime('Variable "labeled" does not exist.', 15, $this->getSourceContext()); })()))) {
                // line 16
                echo "        ";
                $context["message"] = "sylius.ui.show";
                // line 17
                echo "    ";
            }
            // line 18
            echo "
    ";
            // line 19
            echo $context["buttons"]->macro_default((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 19, $this->getSourceContext()); })()), (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 19, $this->getSourceContext()); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 19, $this->getSourceContext()); })()), "search");
            echo "
";
            
            $__internal_96aa1e7b12dcd44389ac05d856c2edcec6773dd85baea4cde64c4e0914b2b245->leave($__internal_96aa1e7b12dcd44389ac05d856c2edcec6773dd85baea4cde64c4e0914b2b245_prof);

            
            $__internal_b4a286d03722d079ae4ec2e88bc433b1e2c525e6e06762138d16986326a16d04->leave($__internal_b4a286d03722d079ae4ec2e88bc433b1e2c525e6e06762138d16986326a16d04_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 22
    public function macro_create($__url__ = null, $__message__ = null, $__id__ = null, $__labeled__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "id" => $__id__,
            "labeled" => $__labeled__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0d9e58db56b070e9c727dbc3904db3669183946fccf20653baac99e5d6df33aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_0d9e58db56b070e9c727dbc3904db3669183946fccf20653baac99e5d6df33aa->enter($__internal_0d9e58db56b070e9c727dbc3904db3669183946fccf20653baac99e5d6df33aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "create"));

            $__internal_cbd828c2ff808d71668c66ae65b20d80943f01cab0e11ad96c9bca32efeeb3b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_cbd828c2ff808d71668c66ae65b20d80943f01cab0e11ad96c9bca32efeeb3b9->enter($__internal_cbd828c2ff808d71668c66ae65b20d80943f01cab0e11ad96c9bca32efeeb3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "create"));

            // line 23
            echo "    ";
            $context["buttons"] = $this;
            // line 24
            echo "
    ";
            // line 25
            if ((twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 25, $this->getSourceContext()); })())) && (isset($context["labeled"]) || array_key_exists("labeled", $context) ? $context["labeled"] : (function () { throw new Twig_Error_Runtime('Variable "labeled" does not exist.', 25, $this->getSourceContext()); })()))) {
                // line 26
                echo "        ";
                $context["message"] = "sylius.ui.create";
                // line 27
                echo "    ";
            }
            // line 28
            echo "
    ";
            // line 29
            echo $context["buttons"]->macro_default((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 29, $this->getSourceContext()); })()), (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 29, $this->getSourceContext()); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 29, $this->getSourceContext()); })()), "plus", "primary");
            echo "
";
            
            $__internal_cbd828c2ff808d71668c66ae65b20d80943f01cab0e11ad96c9bca32efeeb3b9->leave($__internal_cbd828c2ff808d71668c66ae65b20d80943f01cab0e11ad96c9bca32efeeb3b9_prof);

            
            $__internal_0d9e58db56b070e9c727dbc3904db3669183946fccf20653baac99e5d6df33aa->leave($__internal_0d9e58db56b070e9c727dbc3904db3669183946fccf20653baac99e5d6df33aa_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 32
    public function macro_edit($__url__ = null, $__message__ = null, $__id__ = null, $__labeled__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "id" => $__id__,
            "labeled" => $__labeled__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_bafec1d3f7ca5593091fafeda059564296473619cfd04c71d4834a9bfdd29370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_bafec1d3f7ca5593091fafeda059564296473619cfd04c71d4834a9bfdd29370->enter($__internal_bafec1d3f7ca5593091fafeda059564296473619cfd04c71d4834a9bfdd29370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "edit"));

            $__internal_018e99ed3b8626e88d79a1a5846fe11378cd3d1c1cf39b06f69d8379fee41880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_018e99ed3b8626e88d79a1a5846fe11378cd3d1c1cf39b06f69d8379fee41880->enter($__internal_018e99ed3b8626e88d79a1a5846fe11378cd3d1c1cf39b06f69d8379fee41880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "edit"));

            // line 33
            echo "    ";
            $context["buttons"] = $this;
            // line 34
            echo "
    ";
            // line 35
            if ((twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 35, $this->getSourceContext()); })())) && (isset($context["labeled"]) || array_key_exists("labeled", $context) ? $context["labeled"] : (function () { throw new Twig_Error_Runtime('Variable "labeled" does not exist.', 35, $this->getSourceContext()); })()))) {
                // line 36
                echo "        ";
                $context["message"] = "sylius.ui.edit";
                // line 37
                echo "    ";
            }
            // line 38
            echo "
    ";
            // line 39
            echo $context["buttons"]->macro_default((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 39, $this->getSourceContext()); })()), (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 39, $this->getSourceContext()); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 39, $this->getSourceContext()); })()), "pencil");
            echo "
";
            
            $__internal_018e99ed3b8626e88d79a1a5846fe11378cd3d1c1cf39b06f69d8379fee41880->leave($__internal_018e99ed3b8626e88d79a1a5846fe11378cd3d1c1cf39b06f69d8379fee41880_prof);

            
            $__internal_bafec1d3f7ca5593091fafeda059564296473619cfd04c71d4834a9bfdd29370->leave($__internal_bafec1d3f7ca5593091fafeda059564296473619cfd04c71d4834a9bfdd29370_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 42
    public function macro_filter($__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_ae520df02ef1fa9b9ef65da70f26e6cbeefe5062490901e7404b690bee3c379e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_ae520df02ef1fa9b9ef65da70f26e6cbeefe5062490901e7404b690bee3c379e->enter($__internal_ae520df02ef1fa9b9ef65da70f26e6cbeefe5062490901e7404b690bee3c379e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "filter"));

            $__internal_372a0c0f68bf4038742216381efc6b91491b4f57c4dca6fde8c2dbf8fe82792d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_372a0c0f68bf4038742216381efc6b91491b4f57c4dca6fde8c2dbf8fe82792d->enter($__internal_372a0c0f68bf4038742216381efc6b91491b4f57c4dca6fde8c2dbf8fe82792d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "filter"));

            // line 43
            echo "    <button class=\"ui blue labeled icon button\" type=\"submit\">
        <i class=\"icon search\"></i> ";
            // line 44
            echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 44, $this->getSourceContext()); })()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.filter")) : ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 44, $this->getSourceContext()); })()))), "html", null, true);
            echo "
    </button>
";
            
            $__internal_372a0c0f68bf4038742216381efc6b91491b4f57c4dca6fde8c2dbf8fe82792d->leave($__internal_372a0c0f68bf4038742216381efc6b91491b4f57c4dca6fde8c2dbf8fe82792d_prof);

            
            $__internal_ae520df02ef1fa9b9ef65da70f26e6cbeefe5062490901e7404b690bee3c379e->leave($__internal_ae520df02ef1fa9b9ef65da70f26e6cbeefe5062490901e7404b690bee3c379e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 48
    public function macro_resetFilters($__url__ = null, $__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b472b2f15d01f718bbcd8762a608a7906c093aaa45cfe8421db136f545a30909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_b472b2f15d01f718bbcd8762a608a7906c093aaa45cfe8421db136f545a30909->enter($__internal_b472b2f15d01f718bbcd8762a608a7906c093aaa45cfe8421db136f545a30909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "resetFilters"));

            $__internal_28cb4c8f87f95a5a9676f839a3bef83581e3bb5ffc4195fb59387cee0ba00597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_28cb4c8f87f95a5a9676f839a3bef83581e3bb5ffc4195fb59387cee0ba00597->enter($__internal_28cb4c8f87f95a5a9676f839a3bef83581e3bb5ffc4195fb59387cee0ba00597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "resetFilters"));

            // line 49
            echo "    <a class=\"ui labeled icon button\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 49, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
        <i class=\"icon remove\"></i> ";
            // line 50
            echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 50, $this->getSourceContext()); })()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.clear_filters")) : ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 50, $this->getSourceContext()); })()))), "html", null, true);
            echo "
    </a>
";
            
            $__internal_28cb4c8f87f95a5a9676f839a3bef83581e3bb5ffc4195fb59387cee0ba00597->leave($__internal_28cb4c8f87f95a5a9676f839a3bef83581e3bb5ffc4195fb59387cee0ba00597_prof);

            
            $__internal_b472b2f15d01f718bbcd8762a608a7906c093aaa45cfe8421db136f545a30909->leave($__internal_b472b2f15d01f718bbcd8762a608a7906c093aaa45cfe8421db136f545a30909_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 54
    public function macro_delete($__url__ = null, $__message__ = null, $__labeled__ = true, $__resourceId__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "message" => $__message__,
            "labeled" => $__labeled__,
            "resourceId" => $__resourceId__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_6592d9cfbd1c5d703fc1ca808d89e0472a065ab82a22a0707ad6ead83fe04029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_6592d9cfbd1c5d703fc1ca808d89e0472a065ab82a22a0707ad6ead83fe04029->enter($__internal_6592d9cfbd1c5d703fc1ca808d89e0472a065ab82a22a0707ad6ead83fe04029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "delete"));

            $__internal_62fb828b95c7613d30167b2b3c1d1ab7fe43d46982b544c4b030e5796ccbdab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_62fb828b95c7613d30167b2b3c1d1ab7fe43d46982b544c4b030e5796ccbdab1->enter($__internal_62fb828b95c7613d30167b2b3c1d1ab7fe43d46982b544c4b030e5796ccbdab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "delete"));

            // line 55
            echo "    <form action=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 55, $this->getSourceContext()); })()), "html", null, true);
            echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        <button class=\"ui red ";
            // line 57
            if ((isset($context["labeled"]) || array_key_exists("labeled", $context) ? $context["labeled"] : (function () { throw new Twig_Error_Runtime('Variable "labeled" does not exist.', 57, $this->getSourceContext()); })())) {
                echo "labeled ";
            }
            echo "icon button\" type=\"submit\" data-requires-confirmation>
            <i class=\"icon trash\"></i> ";
            // line 58
            echo twig_escape_filter($this->env, (((twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 58, $this->getSourceContext()); })())) && (isset($context["labeled"]) || array_key_exists("labeled", $context) ? $context["labeled"] : (function () { throw new Twig_Error_Runtime('Variable "labeled" does not exist.', 58, $this->getSourceContext()); })()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.delete")) : ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 58, $this->getSourceContext()); })()))), "html", null, true);
            echo "
        </button>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken((isset($context["resourceId"]) || array_key_exists("resourceId", $context) ? $context["resourceId"] : (function () { throw new Twig_Error_Runtime('Variable "resourceId" does not exist.', 60, $this->getSourceContext()); })())), "html", null, true);
            echo "\" />
    </form>
";
            
            $__internal_62fb828b95c7613d30167b2b3c1d1ab7fe43d46982b544c4b030e5796ccbdab1->leave($__internal_62fb828b95c7613d30167b2b3c1d1ab7fe43d46982b544c4b030e5796ccbdab1_prof);

            
            $__internal_6592d9cfbd1c5d703fc1ca808d89e0472a065ab82a22a0707ad6ead83fe04029->leave($__internal_6592d9cfbd1c5d703fc1ca808d89e0472a065ab82a22a0707ad6ead83fe04029_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Macro:buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 60,  410 => 58,  404 => 57,  398 => 55,  377 => 54,  359 => 50,  354 => 49,  335 => 48,  317 => 44,  314 => 43,  296 => 42,  279 => 39,  276 => 38,  273 => 37,  270 => 36,  268 => 35,  265 => 34,  262 => 33,  241 => 32,  224 => 29,  221 => 28,  218 => 27,  215 => 26,  213 => 25,  210 => 24,  207 => 23,  186 => 22,  169 => 19,  166 => 18,  163 => 17,  160 => 16,  158 => 15,  155 => 14,  152 => 13,  130 => 12,  114 => 9,  108 => 7,  105 => 6,  99 => 4,  97 => 3,  73 => 2,  51 => 1,  40 => 53,  37 => 47,  34 => 41,  31 => 31,  28 => 21,  25 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro default(url, message, id, icon, class) %}
    <a class=\"ui {% if message is not empty %}labeled {% endif %}{% if icon is not empty %}icon {% endif %}button {% if class is not empty %} {{ class }} {% endif %}\" {% if id is not null %} id=\"{{ id }}\"{% endif %} href=\"{{ url }}\">
        {% if icon is not empty %}
            <i class=\"icon {{ icon }}\"></i>
        {% endif %}
        {% if message is not empty %}
            {{ message|trans }}
        {% endif %}
    </a>
{% endmacro %}

{% macro show(url, message, id, class, labeled = true) %}
    {% import _self as buttons %}

    {% if message is empty and labeled %}
        {% set message = 'sylius.ui.show' %}
    {% endif %}

    {{ buttons.default(url, message, id, 'search') }}
{% endmacro %}

{% macro create(url, message, id, labeled = true) %}
    {% import _self as buttons %}

    {% if message is empty and labeled %}
        {% set message = 'sylius.ui.create' %}
    {% endif %}

    {{ buttons.default(url, message, id, 'plus', 'primary') }}
{% endmacro %}

{% macro edit(url, message, id, labeled = true) %}
    {% import _self as buttons %}

    {% if message is empty and labeled %}
        {% set message = 'sylius.ui.edit' %}
    {% endif %}

    {{ buttons.default(url, message, id, 'pencil') }}
{% endmacro %}

{% macro filter(message) %}
    <button class=\"ui blue labeled icon button\" type=\"submit\">
        <i class=\"icon search\"></i> {{ message is empty ? 'sylius.ui.filter'|trans : message }}
    </button>
{% endmacro %}

{% macro resetFilters(url, message) %}
    <a class=\"ui labeled icon button\" href=\"{{ url }}\">
        <i class=\"icon remove\"></i> {{ message is empty ? 'sylius.ui.clear_filters'|trans : message }}
    </a>
{% endmacro %}

{% macro delete(url, message, labeled = true, resourceId = null) %}
    <form action=\"{{ url }}\" method=\"post\">
        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
        <button class=\"ui red {% if labeled %}labeled {% endif %}icon button\" type=\"submit\" data-requires-confirmation>
            <i class=\"icon trash\"></i> {{ (message is empty and labeled) ? 'sylius.ui.delete'|trans : message }}
        </button>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(resourceId) }}\" />
    </form>
{% endmacro %}
", "SyliusUiBundle:Macro:buttons.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Macro\\buttons.html.twig");
    }
}
