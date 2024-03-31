import * as React from "react";
import { graphql } from "gatsby";

import Layout from "@/src/components/layout/layout";
import Seo from "@/src/components/seo";

const NotFoundPage = ({ data, location }) => {
  const siteTitle = data.site.siteMetadata.title;

  return (
    <Layout location={location} title={siteTitle}>
      <div className="mx-auto">
        <h1>404: Page not found</h1>
      </div>
    </Layout>
  );
};

export const Head = () => <Seo title="404: Not Found" children={undefined} lang={undefined} />;

export default NotFoundPage;

export const pageQuery = graphql`
    query {
        site {
            siteMetadata {
                title
            }
        }
    }
`;
