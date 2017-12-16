<?php

/* SyliusAdminBundle:Product/Attribute:attributeValues.html.twig */
class __TwigTemplate_071d6fe06a5381bc38c8a26d560c0727d02eee8ea84dbac511002d2f73c0008e extends Twig_Template
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
        $__internal_df25463911c714ed605526a3738e6ad400c6ba73d67bb7f15e378dfd4e95fd65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df25463911c714ed605526a3738e6ad400c6ba73d67bb7f15e378dfd4e95fd65->enter($__internal_df25463911c714ed605526a3738e6ad400c6ba73d67bb7f15e378dfd4e95fd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Attribute:attributeValues.html.twig"));

        $__internal_c1bc90184ee0dd78bd5b6468a29bd690d4e086b83957acde1253857dee6ebb22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1bc90184ee0dd78bd5b6468a29bd690d4e086b83957acde1253857dee6ebb22->enter($__internal_c1bc90184ee0dd78bd5b6468a29bd690d4e086b83957acde1253857dee6ebb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Attribute:attributeValues.html.twig"));

        // line 1
        $context["self"] = $this;
        // line 2
        echo "
";
        // line 3
        $context["subject"] = twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 3, $this->getSourceContext()); })()), "name", array()), array("_attribute" => ""));
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new Twig_Error_Runtime('Variable "forms" does not exist.', 4, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["code"] => $context["localeCodes"]) {
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["localeCodes"]);
            foreach ($context['_seq'] as $context["localeCode"] => $context["form"]) {
                // line 6
                echo "        <div class=\"attribute\" data-id=\"";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\">
            ";
                // line 7
                $context["id"] = twig_lower_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["form"], "vars", array()), "label", array()), array(" " => "_")));
                // line 8
                echo "            ";
                if (twig_in_filter("type_checkbox", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["form"], "vars", array()), "cache_key", array()))) {
                    // line 9
                    echo "                ";
                    echo $context["self"]->macro_checkboxField($context["form"], (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 9, $this->getSourceContext()); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 9, $this->getSourceContext()); })()), (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 9, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 9, $this->getSourceContext()); })()), "applicationName", array()));
                    echo "
            ";
                } else {
                    // line 11
                    echo "                ";
                    echo $context["self"]->macro_textField($context["form"], (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 11, $this->getSourceContext()); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 11, $this->getSourceContext()); })()), (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 11, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 11, $this->getSourceContext()); })()), "applicationName", array()));
                    echo "
            ";
                }
                // line 13
                echo "            <input type=\"hidden\"
                   name=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 14, $this->getSourceContext()); })()), "applicationName", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
                echo "[attributes][";
                echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
                echo "][attribute]\"
                   id=\"";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 15, $this->getSourceContext()); })()), "applicationName", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
                echo "_attributes_";
                echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
                echo "_attribute\"
                   value=\"";
                // line 16
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\"/>
            <input type=\"hidden\"
                   name=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 18, $this->getSourceContext()); })()), "applicationName", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
                echo "[attributes][";
                echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
                echo "][localeCode]\"
                   id=\"";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 19, $this->getSourceContext()); })()), "applicationName", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
                echo "_attributes_";
                echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
                echo "_localeCode\"
                   value=\"";
                // line 20
                echo twig_escape_filter($this->env, $context["localeCode"], "html", null, true);
                echo "\"/>
            ";
                // line 21
                $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 21, $this->getSourceContext()); })()) + 1);
                // line 22
                echo "        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['localeCode'], $context['form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['localeCodes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
";
        // line 43
        echo "
";
        // line 54
        echo "
";
        
        $__internal_df25463911c714ed605526a3738e6ad400c6ba73d67bb7f15e378dfd4e95fd65->leave($__internal_df25463911c714ed605526a3738e6ad400c6ba73d67bb7f15e378dfd4e95fd65_prof);

        
        $__internal_c1bc90184ee0dd78bd5b6468a29bd690d4e086b83957acde1253857dee6ebb22->leave($__internal_c1bc90184ee0dd78bd5b6468a29bd690d4e086b83957acde1253857dee6ebb22_prof);

    }

    // line 26
    public function macro_formField($__item__ = null, $__count__ = null, $__id__ = null, $__prefix__ = null, $__subject__ = null, $__applicationName__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "count" => $__count__,
            "id" => $__id__,
            "prefix" => $__prefix__,
            "subject" => $__subject__,
            "applicationName" => $__applicationName__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_1bfaa6e0e64ba9542b70aaab970e75506b948c710ec90b5f098f9151441d2869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_1bfaa6e0e64ba9542b70aaab970e75506b948c710ec90b5f098f9151441d2869->enter($__internal_1bfaa6e0e64ba9542b70aaab970e75506b948c710ec90b5f098f9151441d2869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "formField"));

            $__internal_a535a70fcaf4b8d562af22d1a1b7e39fae80e7d8f4d58ef46daa63ece0c5ba3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_a535a70fcaf4b8d562af22d1a1b7e39fae80e7d8f4d58ef46daa63ece0c5ba3d->enter($__internal_a535a70fcaf4b8d562af22d1a1b7e39fae80e7d8f4d58ef46daa63ece0c5ba3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "formField"));

            // line 27
            echo "    ";
            $context["__internal_0763f17894f87b9d9de0544525b85e15b469a6340792dad1ba5abcd84d457f72"] = $this;
            // line 28
            echo "    ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 28, $this->getSourceContext()); })()), "children", array())) > 0)) {
                // line 29
                echo "        ";
                $context["prefix"] = (((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 29, $this->getSourceContext()); })()) . "_") . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 29, $this->getSourceContext()); })()), "vars", array()), "name", array()));
                // line 30
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 30, $this->getSourceContext()); })()), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 31
                    echo "            ";
                    echo $context["__internal_0763f17894f87b9d9de0544525b85e15b469a6340792dad1ba5abcd84d457f72"]->macro_formField($context["child"], (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 31, $this->getSourceContext()); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 31, $this->getSourceContext()); })()), (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 31, $this->getSourceContext()); })()), (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 31, $this->getSourceContext()); })()), (isset($context["applicationName"]) || array_key_exists("applicationName", $context) ? $context["applicationName"] : (function () { throw new Twig_Error_Runtime('Variable "applicationName" does not exist.', 31, $this->getSourceContext()); })()));
                    echo "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 33, $this->getSourceContext()); })()), "vars", array()), "name", array()) != "_token")) {
                // line 34
                echo "        ";
                $context["namePrefix"] = twig_replace_filter((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 34, $this->getSourceContext()); })()), array("_" => "]["));
                // line 35
                echo "        ";
                $context["dataName"] = (((((((((isset($context["applicationName"]) || array_key_exists("applicationName", $context) ? $context["applicationName"] : (function () { throw new Twig_Error_Runtime('Variable "applicationName" does not exist.', 35, $this->getSourceContext()); })()) . "_") . (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 35, $this->getSourceContext()); })())) . "[attributes][") . (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 35, $this->getSourceContext()); })())) . (isset($context["namePrefix"]) || array_key_exists("namePrefix", $context) ? $context["namePrefix"] : (function () { throw new Twig_Error_Runtime('Variable "namePrefix" does not exist.', 35, $this->getSourceContext()); })())) . "][") . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 35, $this->getSourceContext()); })()), "vars", array()), "name", array())) . "]");
                // line 36
                echo "        ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "vars", array(), "any", false, true), "multiple", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 36, $this->getSourceContext()); })()), "vars", array()), "multiple", array()))) {
                    // line 37
                    echo "            ";
                    $context["dataName"] = ((isset($context["dataName"]) || array_key_exists("dataName", $context) ? $context["dataName"] : (function () { throw new Twig_Error_Runtime('Variable "dataName" does not exist.', 37, $this->getSourceContext()); })()) . "[]");
                    // line 38
                    echo "        ";
                }
                // line 39
                echo "
        ";
                // line 40
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 40, $this->getSourceContext()); })()), 'widget', array("id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 40, $this->getSourceContext()); })()), "attr" => array("data-name" => (isset($context["dataName"]) || array_key_exists("dataName", $context) ? $context["dataName"] : (function () { throw new Twig_Error_Runtime('Variable "dataName" does not exist.', 40, $this->getSourceContext()); })()))));
                echo "
    ";
            }
            
            $__internal_a535a70fcaf4b8d562af22d1a1b7e39fae80e7d8f4d58ef46daa63ece0c5ba3d->leave($__internal_a535a70fcaf4b8d562af22d1a1b7e39fae80e7d8f4d58ef46daa63ece0c5ba3d_prof);

            
            $__internal_1bfaa6e0e64ba9542b70aaab970e75506b948c710ec90b5f098f9151441d2869->leave($__internal_1bfaa6e0e64ba9542b70aaab970e75506b948c710ec90b5f098f9151441d2869_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 44
    public function macro_textField($__form__ = null, $__count__ = null, $__id__ = null, $__subject__ = null, $__applicationName__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "count" => $__count__,
            "id" => $__id__,
            "subject" => $__subject__,
            "applicationName" => $__applicationName__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_83a7eb13e22443b802e1ba211d0c6f155549eb03bc38fb626bd0d797f6530a78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_83a7eb13e22443b802e1ba211d0c6f155549eb03bc38fb626bd0d797f6530a78->enter($__internal_83a7eb13e22443b802e1ba211d0c6f155549eb03bc38fb626bd0d797f6530a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "textField"));

            $__internal_382ed25b320caa7f2726f2169f9698691f95b0a37e23d8ab4e8d93e19b5fb0fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_382ed25b320caa7f2726f2169f9698691f95b0a37e23d8ab4e8d93e19b5fb0fe->enter($__internal_382ed25b320caa7f2726f2169f9698691f95b0a37e23d8ab4e8d93e19b5fb0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "textField"));

            // line 45
            echo "    ";
            $context["__internal_a5b74280d3f08e80f1548c51f485f30ca93e2a24c83e98ad5e48d16950a18bf3"] = $this;
            // line 46
            echo "    <div class=\"ui right fluid labeled input\" style=\"margin-top: 15px; margin-bottom: 15px;\">
        <div class=\"ui label\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()), "vars", array()), "label", array()), "html", null, true);
            echo "</div>
        ";
            // line 48
            echo $context["__internal_a5b74280d3f08e80f1548c51f485f30ca93e2a24c83e98ad5e48d16950a18bf3"]->macro_formField((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 48, $this->getSourceContext()); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 48, $this->getSourceContext()); })()), "", (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 48, $this->getSourceContext()); })()), (isset($context["applicationName"]) || array_key_exists("applicationName", $context) ? $context["applicationName"] : (function () { throw new Twig_Error_Runtime('Variable "applicationName" does not exist.', 48, $this->getSourceContext()); })()));
            echo "
        <button class=\"ui red right labeled icon button\">
            <i class=\"remove icon\"></i> ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.delete"), "html", null, true);
            echo "
        </button>
    </div>
";
            
            $__internal_382ed25b320caa7f2726f2169f9698691f95b0a37e23d8ab4e8d93e19b5fb0fe->leave($__internal_382ed25b320caa7f2726f2169f9698691f95b0a37e23d8ab4e8d93e19b5fb0fe_prof);

            
            $__internal_83a7eb13e22443b802e1ba211d0c6f155549eb03bc38fb626bd0d797f6530a78->leave($__internal_83a7eb13e22443b802e1ba211d0c6f155549eb03bc38fb626bd0d797f6530a78_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 55
    public function macro_checkboxField($__form__ = null, $__count__ = null, $__id__ = null, $__subject__ = null, $__applicationName__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "count" => $__count__,
            "id" => $__id__,
            "subject" => $__subject__,
            "applicationName" => $__applicationName__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_9450c0aed3a09edcfdd35a5cda64d1ffc3579fafdc1c4a770c445e89501eb68f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_9450c0aed3a09edcfdd35a5cda64d1ffc3579fafdc1c4a770c445e89501eb68f->enter($__internal_9450c0aed3a09edcfdd35a5cda64d1ffc3579fafdc1c4a770c445e89501eb68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "checkboxField"));

            $__internal_2ba3d097591de4914779ea5e90e967a10ef9f18585e8933fe69b23eb1e6faa5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_2ba3d097591de4914779ea5e90e967a10ef9f18585e8933fe69b23eb1e6faa5f->enter($__internal_2ba3d097591de4914779ea5e90e967a10ef9f18585e8933fe69b23eb1e6faa5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "checkboxField"));

            // line 56
            echo "    ";
            $context["__internal_b83dd029d58df66d19caecb278fd6c2bdc77e10fd45099882f223aa3de7f4f3c"] = $this;
            // line 57
            echo "    <div class=\"ui toggle checkbox\" style=\"margin-top: 15px; margin-bottom: 15px;\">
        ";
            // line 58
            echo $context["__internal_b83dd029d58df66d19caecb278fd6c2bdc77e10fd45099882f223aa3de7f4f3c"]->macro_formField((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->getSourceContext()); })()), (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 58, $this->getSourceContext()); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 58, $this->getSourceContext()); })()), "", (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 58, $this->getSourceContext()); })()), (isset($context["applicationName"]) || array_key_exists("applicationName", $context) ? $context["applicationName"] : (function () { throw new Twig_Error_Runtime('Variable "applicationName" does not exist.', 58, $this->getSourceContext()); })()));
            echo "
        <label>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->getSourceContext()); })()), "vars", array()), "label", array()), "html", null, true);
            echo "</label>
    </div>
    <button class=\"ui red right labeled icon button\" style=\"float: right;\">
        <i class=\"remove icon\"></i> ";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.delete"), "html", null, true);
            echo "
    </button>
";
            
            $__internal_2ba3d097591de4914779ea5e90e967a10ef9f18585e8933fe69b23eb1e6faa5f->leave($__internal_2ba3d097591de4914779ea5e90e967a10ef9f18585e8933fe69b23eb1e6faa5f_prof);

            
            $__internal_9450c0aed3a09edcfdd35a5cda64d1ffc3579fafdc1c4a770c445e89501eb68f->leave($__internal_9450c0aed3a09edcfdd35a5cda64d1ffc3579fafdc1c4a770c445e89501eb68f_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Attribute:attributeValues.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 62,  310 => 59,  306 => 58,  303 => 57,  300 => 56,  278 => 55,  259 => 50,  254 => 48,  250 => 47,  247 => 46,  244 => 45,  222 => 44,  204 => 40,  201 => 39,  198 => 38,  195 => 37,  192 => 36,  189 => 35,  186 => 34,  183 => 33,  174 => 31,  169 => 30,  166 => 29,  163 => 28,  160 => 27,  137 => 26,  126 => 54,  123 => 43,  120 => 25,  109 => 22,  107 => 21,  103 => 20,  95 => 19,  87 => 18,  82 => 16,  74 => 15,  66 => 14,  63 => 13,  57 => 11,  51 => 9,  48 => 8,  46 => 7,  41 => 6,  36 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import _self as self %}

{% set subject = metadata.name|replace({'_attribute': ''}) %}
{% for code, localeCodes in forms %}
    {% for localeCode, form in localeCodes %}
        <div class=\"attribute\" data-id=\"{{ code }}\">
            {% set id = form.vars.label|replace({' ': '_'})|lower %}
            {% if 'type_checkbox' in form.vars.cache_key %}
                {{ self.checkboxField(form, count, id, subject, metadata.applicationName) }}
            {% else %}
                {{ self.textField(form, count, id, subject, metadata.applicationName) }}
            {% endif %}
            <input type=\"hidden\"
                   name=\"{{ metadata.applicationName }}_{{ subject }}[attributes][{{ count }}][attribute]\"
                   id=\"{{ metadata.applicationName }}_{{ subject }}_attributes_{{ count }}_attribute\"
                   value=\"{{ code }}\"/>
            <input type=\"hidden\"
                   name=\"{{ metadata.applicationName }}_{{ subject }}[attributes][{{ count }}][localeCode]\"
                   id=\"{{ metadata.applicationName }}_{{ subject }}_attributes_{{ count }}_localeCode\"
                   value=\"{{ localeCode }}\"/>
            {% set count = count + 1 %}
        </div>
    {% endfor %}
{% endfor %}

{% macro formField(item, count, id, prefix, subject, applicationName) %}
    {% from _self import formField %}
    {% if item.children|length > 0 %}
        {% set prefix = prefix~'_'~item.vars.name %}
        {% for child in item.children %}
            {{ formField(child, count, id, prefix, subject, applicationName) }}
        {% endfor %}
    {% elseif item.vars.name != '_token' %}
        {% set namePrefix = prefix|replace({'_': ']['}) %}
        {% set dataName = applicationName~'_'~subject~'[attributes]['~count~namePrefix~']['~item.vars.name~']' %}
        {% if item.vars.multiple is defined and item.vars.multiple %}
            {% set dataName = dataName~'[]' %}
        {% endif %}

        {{ form_widget(item, {'id': id, 'attr': {'data-name': dataName }}) }}
    {% endif %}
{% endmacro %}

{% macro textField(form, count, id, subject, applicationName) %}
    {% from _self import formField %}
    <div class=\"ui right fluid labeled input\" style=\"margin-top: 15px; margin-bottom: 15px;\">
        <div class=\"ui label\">{{ form.vars.label }}</div>
        {{ formField(form, count, id, '', subject, applicationName) }}
        <button class=\"ui red right labeled icon button\">
            <i class=\"remove icon\"></i> {{ 'sylius.ui.delete'|trans }}
        </button>
    </div>
{% endmacro %}

{% macro checkboxField(form, count, id, subject, applicationName) %}
    {% from _self import formField %}
    <div class=\"ui toggle checkbox\" style=\"margin-top: 15px; margin-bottom: 15px;\">
        {{ formField(form, count, id, '', subject, applicationName) }}
        <label>{{ form.vars.label }}</label>
    </div>
    <button class=\"ui red right labeled icon button\" style=\"float: right;\">
        <i class=\"remove icon\"></i> {{ 'sylius.ui.delete'|trans }}
    </button>
{% endmacro %}
", "SyliusAdminBundle:Product/Attribute:attributeValues.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Product\\Attribute\\attributeValues.html.twig");
    }
}
